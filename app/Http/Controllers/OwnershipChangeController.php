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
            'idno' => [
                'required',
                function ($attribute, $value, $fail) {
                    // Check if the ID number has 10 digits and starts with a non-zero digit and ends with 'v'
                    if (!preg_match('/^[1-9][0-9]{8}v$/i', $value)) {
                        // Check if the ID number has 12 digits and all digits are numbers
                        if (!preg_match('/^[0-9]{12}$/', $value)) {
                            $fail("The NIC Number format is invalid. Please enter a valid format.");
                        }
                    }
                },
            ],
            'contact' => 'required|regex:/^0[0-9]{9}$/',
            'Email' => 'required|email|unique:users,email',
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

    public function getOwnershipChangeRequests(Request $request)
    {
        $search = $request->input('search');

        $CheckOwnershipChange = OwnershipChange::when($search, function ($query, $search) {
            return $query->where('fname', 'like', '%' . $search . '%')
                         ->orWhere('address', 'like', '%' . $search . '%')
                         ->orWhere('idno', 'like', '%' . $search . '%')
                         ->orWhere('contact', 'like', '%' . $search . '%')
                         ->orWhere('Email', 'like', '%' . $search . '%');
        })->get();

        return view('admin.CheckOwnershipChange', compact('CheckOwnershipChange'));
    }


}