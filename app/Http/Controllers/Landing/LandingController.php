<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home_index');
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
