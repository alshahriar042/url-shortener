<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Url;
use App\Models\Visit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;

class UrlController extends Controller
{
    public function index()
    {
        $urls =  Url::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        return view('dashboard', compact('urls'));
    }

    public function generateUniqueCode()
    {

        do {
            $code =Str::random(6);
        } while (Url::where("shortened_url", "=", $code)->first());
            return $code;
    }


    public function store(Request $request)
    {
        try {

            $data['orginal_url']     = $request->orginal_url;
            $data['shortened_url']   = $this->generateUniqueCode();
            $data['user_id']         = Auth::id();
            $data['ip_block_number'] = $request->block_number;

            if ($request->expire_dateTime) {
                $data['expiration_duration'] = date("Y-m-d H:i:s", strtotime($request->expire_dateTime));
            } else {
                $data['expiration_duration'] = '0';
            }
            $urls = Url::create($data);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back()->with('warning', ' Updated Failed.');
        }
        return back()->with('success', 'Shortened Url Successfully Created.');
    }


    public function insertinfo($id)
    {
        // $ip=$request->ip(); //For live
        // $visit['previous_platform'] =
        $ip                        = '103.239.147.190'; // Use for localhost
        $currentUserInfo           = Location::get($ip);
        $visit['url_id']           = $id;
        $visit['visitor_ip']       = $currentUserInfo->ip;
        $visit['visitor_location'] = $currentUserInfo->cityName;
        $visit['visitor_long']     = $currentUserInfo->longitude;
        $visit['visitor_lat']      = $currentUserInfo->latitude;
        $visit['visitor_device']   = Agent::device();
        $visit['visitor_os']       = Agent::platform();
        $visit['last_visit_time']  = Carbon::now();

        $ipexists = Visit::select('*')->where('visitor_ip', $ip)->first();
        if ($ipexists == null) {
            Visit::create($visit);
        } else {
            $visitor_count = $ipexists->visit_count;
            $visitor_count = $visitor_count + 1;
            Visit::where('id', $ipexists->id)
                ->update([
                    'visit_count' => $visitor_count
                ]);
        }
    }

    public function show(Request $request, $code)
    {
        $current_time = Carbon::now();
        $find_url     = Url::where('shortened_url', $code)->first();
        $visit        = Visit::where('url_id', $find_url->id)->first();
        // $date         = Carbon::parse($visit->last_visit_time);
        // $now          = Carbon::now();
        // $diff         = $date->diffInMinutes($now);

        // if (($diff >= 1) && ($find_url->ip_block_number < $visit->visit_count)) {
        //     dd("expirex");
        // }else{
        //     dd('ok');
        // }

        if ($find_url->expiration_duration > $current_time) {
            $this->insertinfo($find_url->id);
            return redirect($find_url->orginal_url);
        } elseif ($find_url->expiration_duration == 0) {
            $this->insertinfo($find_url->id);
            return redirect($find_url->orginal_url);
        } else {
            return view("404");
        }
    }
}
