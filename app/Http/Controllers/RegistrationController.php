<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class RegistrationController extends Controller
{

    //show data part
    public function index()
    {
        $registrations = User::all(); 
        return view('reg.index', ['registrations' => $registrations]);
    }

    //register form
    public function register()
    {
        return view('reg.register');
    }

    //register part
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email:users,email,',
            'password' => 'required|min:8|max:12',
        ]);
        

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            return redirect('/login')->with('success', 'You have regitered successfully');
        }else {
            return back()->with('fail', 'Something Wrong');

       
        }
    }

    //edit part
    public function edit(User $registration) 
    {
        return view('reg.edit', ['registration' => $registration]);
    }


    //update part
    public function update(User $registration, Request $request) 
    {
        $data = $request->validate([
            'name' => 'required|alpha|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|unique:users,email,' . $registration->id, 
            'password' => 'required|min:8|max:12', 
        ]);

        
        $registration->update($data);
        return redirect(route('reg.index'))->with('success', 'Updated Successfully');
    }

    //delete part
    public function destroy(User $registration) 
    {
        $registration->delete();
        return redirect(route('reg.index'))->with('success', 'Deleted Successfully');
    }


    //login form
    public function login()
    {
        return view('log.login');
    }

    //login part
    public function check(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8|max:12',
    ]);

    $credentials = [
        'email' => $request->email,
        'password' => $request->password
    ];

    // Attempt to authenticate using Auth::attempt()
    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Set session and redirect based on the user's role
        if ($user->role == '0') {
            $redirectRoute = 'UserDashboard';
            $message = 'User login success';
        } else {
            $redirectRoute = 'AdminDashboard';
            $message = 'Admin login success';
        }

        $request->session()->put('loginId', $user->id);

        return redirect($redirectRoute)->with('success', $message);
    }

    // Authentication failed with Auth::attempt()
    
    // Manually retrieve the user for additional checks
    $user = User::where('email', $request->email)->first();

    if ($user) {
        return back()->with('fail', 'Password does not match');
    } else {
        return back()->with('fail', 'This email is not registered');
    }
}


    //user dashboard
    public function UserDashboard(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        
        return view('user.UserDashboard', compact('user'));
    }

    //admin dashboard
    public function AdminDashboard(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        
        return view('admin.AdminDashboard', compact('user'));
    }

    public function CheckRegistration(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('admin.CheckRegistration', compact('user'));
    }

    // public function AdminDashboard(){
    
    //     $user = array();
    //     if(Session::has('loginId')){
    //         $user = User::where('id','=', Session::get('loginId'))->first();

    //         }
    //     return view('admin.AdminDashboard', compact('user'));
    // }

    public function Help(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.Help', compact('user'));
    }

    public function OwnershipChange(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.OwnershipChange', compact('user'));
    }

    public function PermitRequest(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.PermitRequest', compact('user'));
    }

    public function Registration(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.Registration', compact('user'));
    }

    public function Renew(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.Renew', compact('user'));
    }
    public function SBU_LogsTimber(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.SBU_LogsTimber', compact('user'));
    }
    public function SBU_SawnTimber(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.SBU_SawnTimber', compact('user'));
    }
    public function StockBookUpdate(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.StockBookUpdate', compact('user'));
    }
    

    
    public function UserLogout(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.UserLogout', compact('user'));
    }


    public function logout(){
        if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login');
        }
    }
}
