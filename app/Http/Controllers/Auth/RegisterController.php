<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function index(){
        return view('auth.register');

    }

    public function register(Request $request){

        $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|email|min:10|max:255',
            'password' => 'required|confirmed',
            'phone' => 'required|min:10',
            'DoB' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'DoB' => $request->DoB
        ]);

        return redirect('login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'max:255'],
    //         'email' => ['required','email', 'max:255', 'unique:users'],
    //         'password' => ['required','min:8', 'confirmed'],
    //         'phone' => ['required','min:10'],
    //         'DoB' => ['required'],
    //     ]);
    // }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */


    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'phone' => $data['phone'],
    //         'DoB' => $data['DoB'],
    //         // 'role' => $data['role'],
    //         'zone_id' => $data['zone_id'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
