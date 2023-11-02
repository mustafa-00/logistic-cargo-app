<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Calltoaction;
use App\Models\Ourservice;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $calltoaction = Calltoaction::all();
        $aboutus = Aboutus::all();
        $ourservice = Ourservice::all();
        return view('landing.home_index',compact('calltoaction','aboutus','ourservice'));
    }

    public function about(){

        return view('landing.about.about_index');
    }

    public function services(){

        return view('landing.services.services_index');
    }

    public function contact(){

        return view('landing.contact.contact_index');
    }
}
