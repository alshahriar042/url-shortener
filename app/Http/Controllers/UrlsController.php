<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Urls;
use App\Models\Visits;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Facades\Agent;



use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isNull;
use function PHPUnit\Framework\isEmpty;
use Stevebauman\Location\Facades\Location;

class UrlsController extends Controller
{
    public function index()
    {
        $auth_id = Auth::user()->id;
        //  dd($auth_id);
        $urls =  Urls::OrderBy('id', 'desc')->get();
        //    $urls=  Urls::OrderBy('id','desc')->where('user_id','=', '$auth_id') ->get();

        //  dd($urls);
        return view('dashboard', compact('urls'));
    }

    public function store(Request $request)
    {

        try {
            DB::transaction(function() use($request){
        $unqiue_string = Str::random(6);
        // $unique_check = Urls::where('shortened_url', '$unqiue_string')->first();
        $data['orginal_url'] = $request->orginal_url;
        $data['shortened_url'] = $unqiue_string;
        $data['user_id'] = Auth::id();
        if($request->expire_dateTime){
            $data['expiration_duration'] = date("Y-m-d h:i:s", strtotime($request->expire_dateTime));
        }else{
            $data['expiration_duration'] ='0';

        }
        $urls= Urls::create($data);

        //  $ip=$request->ip(); //For live
        $ip = '103.239.147.187'; // Use for localhost
        $currentUserInfo = Location::get($ip);

        $visit['url_id'] = $urls->id;
        $visit['visitor_ip'] = $currentUserInfo->ip;
        $visit['visitor_location'] = $currentUserInfo->cityName;
        $visit['visitor_long'] = $currentUserInfo->longitude;
        $visit['visitor_lat'] = $currentUserInfo->latitude;
        $visit['visitor_device'] = Agent::device();
        $visit['visitor_os'] =  Agent::platform();
        // $visit['previous_platform'] = $currentUserInfo->cityName;
        $visit['last_visit_time'] = Carbon::now();

         Visits::create($visit);

        });
    } catch (\Throwable $th) {
        Log::error($th->getMessage());
        return back()->with('warning', ' Updated Failed.');
    }

    return back()->with('success', 'Shortened Url Successfully Created.');
    }

    public function show($code)
    {
        $current_time = Carbon::now();
        $find_url = Urls::where('shortened_url', $code)->first();
        if(($find_url->expiration_duration) > $current_time ){
            return redirect($find_url->orginal_url);
         }elseif($find_url->expiration_duration==0){
            return redirect($find_url->orginal_url);
         }
        else{
            return view("404");
        }
    }
}
