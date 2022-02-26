<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function index(){
        $reports= Url::with(['visits'])->get();
        // dd($reports);

        return view('report',compact('reports'));
    }
}
