<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = User::all(); 
        return view('registrations.index', ['registrations' => $registrations]);
    }

    public function register()
    {
        return view('registrations.register');
    }

    public function UserDashboard()
    {
        return view('UserDashboard');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:6', 
        ]);

        

        $newRegistration = User::create($data); 
        return redirect(route('log.login'));
    }

    public function edit(User $registration) 
    {
        return view('registrations.edit', ['registration' => $registration]);
    }

    public function update(User $registration, Request $request) 
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $registration->id, 
            'password' => 'required|min:6', 
        ]);

        
        $registration->update($data);
        return redirect(route('registration.index'))->with('success', 'Updated Successfully');
    }

    public function destroy(User $registration) 
    {
        $registration->delete();
        return redirect(route('registration.index'))->with('success', 'Deleted Successfully');
    }

    public function login()
    {
        return view('log.login');
    }

    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('UserDashboard');
        }

        return back()->with('loginError', 'Username or Password is Invalid');
    }
}
