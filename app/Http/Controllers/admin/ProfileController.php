<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $user_id = Auth::user()->id;
        $profile = User::select("*")->where("id", $user_id)->get();
        return view('admin.profile')->with('profile', $profile);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'image' => ['required', 'mimes:jpg, jpeg'],
        // ]);
        $user = User::find($id);


        $filename = uniqid().'.'. $request->image->extension();
        $out = $request->image->storeAs('images/users', $filename);

        if($out){
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'DoB' => $request->DoB,
                'role' => $request->role,
                'zone_id' => $request->zone_id,
                'profile_photo_path' => $filename,
            ]);
        }

        session()->flash('success','Record has been updated succesfully');
        return redirect()->back();
    }

    // change password
    public function change(Request $request, $id) {
        $user = User::find($id);
        if(password_verify($request->password, $user->password)){
            if($request->newpassword === $request->renewpassword){
                $user->password = Hash::make($request->newpassword);
                $user->save();
            }
        }

        auth()->logout();
        return redirect('login');
    }

}
