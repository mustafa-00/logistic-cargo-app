<?php

namespace App\Http\Controllers\admin\employes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Ramsey\Uuid\v1;

class EmployeoverviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($request)->all();
        // $employes = User::all();
        $employes = User::paginate(5);
        return view('admin.employes.employes_overview')->with('employes',$employes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.employes.add-employee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'DoB' => 'required|date',
            // 'role' =>'required',
            'zone_id' => 'required',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'DoB' => $request->DoB,
            // 'role' => $request->role,
            'zone_id' => $request->zone_id,
            'profile_photo_path' => 'default_image.png',
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('employe_overview.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = User::find($id);
        return view("admin.employes.single_employee")->with("employee", $employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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

        session()->flash('success','Record has been updatede successfuly!');
        return redirect()->back();
    }

    public function change(Request $request, $id){
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        User::find($id)->delete();
        session()->flash('error','Record has been deleted succesfuly!');
        return back();
    }
}
