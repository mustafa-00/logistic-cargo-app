<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Calltoaction;
use App\Models\Ourmission;
use App\Models\Ourservice;
use App\Models\Ourteammemeber;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $calltoaction = Calltoaction::all();
        $aboutus = Aboutus::all();
        $ourservice = Ourservice::all();
        $ourmission = Ourmission::all();
        $teammember = Ourteammemeber::all();
        return view('landing.home_index',compact('calltoaction','aboutus','ourservice','ourmission','teammember'));
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
