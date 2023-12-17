<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registeruser;
use App\Models\RegisteredUser;
use App\Models\OwnershipChange;
use Illuminate\Support\Facades\DB;

class OwnershipChangeController extends Controller
{

    

    public function store_data(Request $request){    
        // dd($request);    
        $data = new OwnershipChange;

        $this->validate($request,[            
            'idno'=>'required|max:12|min:8',
            'contact'=>'size:10'
        ]);

        $data->userid = $request->input('userid');
        $data->idno = $request->input('idno');
        $data->fname = $request->input('fname');
        $data->address = $request->input('address');
        $data->contact = $request->input('contact');
        $data->Email = $request->input('Email');

        $data->save();
        
        return redirect(route('OwnershipChange'))->with('success', 'Record Saved Successfully');
        
    }

    public function CheckOwnershipChange()
    {
        $CheckOwnershipChange = OwnershipChange::all();
        $user = auth()->user(); 
        return view('admin.CheckOwnershipChange',compact('CheckOwnershipChange','user'));
    }


    public function update_ownership($userid) {
        $data = OwnershipChange::find($userid);
        $user = auth()->user(); 
        return view('admin.UpdateOwnership', compact('data','user', 'userid'));
    }

    public function updateRegisteredUser(Request $request)
    {
       
        $user = RegisteredUser::find($request->userid);

        
        if ($user) {
            
            if ($request->userid == $user->id) {
                $user->idno = $request->idno;
                $user->fname = $request->fname;
                $user->address = $request->address;
                $user->contact = $request->contact;
                $user->Email = $request->Email;

               
                $user->save();

                //dd($user);
                
                return redirect('/CheckOwnershipChange')->with('success', 'User data updated successfully');
            } else {
                
                return redirect('/CheckOwnershipChange')->with('fail', 'Invalid user ID');
            }
        } else {
           
            return redirect('/CheckOwnershipChange')->with('fail', 'User not found');
        }
    }

}