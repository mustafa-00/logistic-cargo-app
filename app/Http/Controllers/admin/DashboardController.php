<?php

namespace App\Http\Controllers\admin;

 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        if(\Auth::user()->role === 'admin'){
            return view('admin.dashboard');
        }
        return view('employee.dashboard');
    }
}
