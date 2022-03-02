<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $reports= Url::with(['user','visits'])->get();
        return view('report',compact('reports'));
    }

    public function error(){
        return view('error-message');
    }
}
