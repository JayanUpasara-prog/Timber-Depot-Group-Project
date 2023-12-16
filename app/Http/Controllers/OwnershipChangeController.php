<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registeruser;
use App\Models\OwnershipChange;
use Illuminate\Support\Facades\DB;

class OwnershipChangeController extends Controller
{
    // ... (your existing methods)

    // public function update(Registeruser $registration, Request $request)
    // {
    //     // // Validate the request data
    //     // $data = $request->validate([
    //     //     'fname' => 'required',
    //     //     'address' => 'required',
    //     //     'id' => 'required',
    //     //     'contact' => 'required|regex:/^0[0-9]{9}$/',
    //     //     'Email' => 'required|email',
    //     //     // Add validation rules for other fields as needed
    //     // ]);

    //     // Update the registration record with the validated data
    //     // $registration->update($data);

    //     // Redirect back to the ownership change form with a success message
    //     return redirect('/UpdateOwnership')->with('success', 'Ownership change details updated successfully.');
    // }

    // public function UpdateOwnership(){
    
    //     $user = array();
    //     if(Session::has('loginId')){
    //         $user = User::where('id','=', Session::get('loginId'))->first();

    //         }
    //     return view('user.UpdateOwnership', compact('user'));
    // }

    // public function view_record($id) {
    //     $data = registeruser::find($id);
    //     return view('admin.UsersInfo', compact('data'));
    // }

    public function store_data(Request $request){
        // dd($request);
        $data = new OwnershipChange;

        $data->idno = $request->input('idno');
        $data->fname = $request->input('fname');
        $data->address = $request->input('address');
        $data->contact = $request->input('contact');
        $data->Email = $request->input('Email');

        $data->save();
        
        return redirect(route('OwnershipChange'))->with('success', 'Record Saved Successfully');        
        
    }


    // public function request_lists(){
        
    //     $request_lists = OwnershipChange::all();
    //     return view('admin.CheckOwnershipChange',compact('CheckOwnershipChange'));
         
    //     // return $request_list = DB::table('ownership_changes')->get();

    // }

    public function CheckOwnershipChange()
    {
        $CheckOwnershipChange = OwnershipChange::all();
        $user = auth()->user(); // Assuming you have a logged-in user
        return view('admin.CheckOwnershipChange',compact('CheckOwnershipChange','user'));
    }


}
