<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\Countdown;
use App\Models\course;
use App\Models\gallery;
use App\Models\notice;
use App\Models\slider;
use App\Models\teacher;
use App\Models\Timeline;

class siteController extends Controller
{
    public function index(){
        $sliders = slider::all();
        $chairman = teacher::where('designation', '=', 'Chairman')->get();
        $principal = teacher::where('designation', '=', 'Principal')->get();
        $courses = course::with('teacher')->latest()->get();
        $count = Countdown::find(1);
        $timeline = Timeline::first();
        return view('frontend.home',compact('sliders','courses','count','chairman','principal','timeline'));
    }
}
