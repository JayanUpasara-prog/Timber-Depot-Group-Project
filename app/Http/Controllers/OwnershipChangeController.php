<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registeruser;
use App\Models\RegisteredUser;
use App\Models\OwnershipChange;
use Illuminate\Support\Facades\DB;

class OwnershipChangeController extends Controller
{

    // public function AutoShowData($id){
    //     $data = RegisteredUser::find($id);
    //     return view('OwnershipChange', compact('data', 'id'));
    // }

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
        $user = auth()->user(); // Assuming you have a logged-in user
        return view('admin.CheckOwnershipChange',compact('CheckOwnershipChange','user'));
    }


    public function update_ownership($userid) {
        $data = OwnershipChange::find($userid);
        $user = auth()->user(); // Assuming you have a logged-in user
        return view('admin.UpdateOwnership', compact('data','user', 'userid'));
    }

    public function updateRegisteredUser(Request $request)
    {
        // Retrieve the user data based on the 'id' column
        $user = RegisteredUser::find($request->userid);

        // Check if the user exists
        if ($user) {
            // Update the user data only if the 'userid' matches the 'id' column
            if ($request->userid == $user->id) {
                // Update the user data
                $user->idno = $request->idno;
                $user->fname = $request->fname;
                $user->address = $request->address;
                $user->contact = $request->contact;
                $user->Email = $request->Email;

                // Save the changes to the database
                $user->save();

                //dd($user);
                // Redirect with success message or perform any other action
                return redirect('/CheckOwnershipChange')->with('success', 'User data updated successfully');
            } else {
                // Redirect with error message if 'userid' does not match 'id'
                return redirect('/CheckOwnershipChange')->with('fail', 'Invalid user ID');
            }
        } else {
            // Redirect with error message if user does not exist
            return redirect('/CheckOwnershipChange')->with('fail', 'User not found');
        }
    }

}