<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        if(!auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            return back();

        }else{
            auth()->attempt(['email' =>$request->eamil, 'password' => $request->password],$request->remember);
            return redirect('dashboard');
        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'email' => ['required','min:5','max:255'],
    //         'password' => ['required', 'min:5','max:255']
    //     ]);
    // }

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
