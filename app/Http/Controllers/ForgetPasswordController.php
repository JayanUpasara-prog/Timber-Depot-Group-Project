<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    function forgetPassword(){
        return view('forget-password');
    }

    function forgetPasswordPost(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
        ]);

        $token = Str::random(64);

        $userEmail = $request->email;

        DB::table(table:'password_reset_tokens')->insert([
            'email'=> $userEmail,
            'token'=>$token,
            'created_at'=> Carbon::now()
        ]);

        Mail::send('Email.forget-password', ['token' => $token], function ($message) use ($userEmail) {
            $message->to($userEmail);
            $message->subject('Reset Password');
        });

        return redirect("forget-password")->with('success', 'We have send an email to reset passsword');
        
    }

    function resetPassword($token){
            return view('new-password', compact('token'));
    }

    function resetPasswordPost(Request $request){
            $request ->validate([
                'email'=>'required|email|exists:users',
                'password' => 'required|min:8|max:12|confirmed',
                'password_confirmation' => 'required|'
            ]);

            $userEmail = $request->email;

            $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $userEmail,
                'token' => $request->token
            ])->first();


            if(!$updatePassword){
                return redirect('reset.password')->with('error', 'Invalid');
            }

            User::where('email', $userEmail)->update(['password'=>Hash::make($request-> password)]);

            DB::table(table:'password_reset_tokens')->where(['email' => $request->email])->delete();
                return redirect('login')->with('success', 'Password reset Successfully'); 
    }
}
