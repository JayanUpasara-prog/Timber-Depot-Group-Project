<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registeruser;
use App\Models\OwnershipChange;
use Illuminate\Support\Facades\DB;

class OwnershipChangeController extends Controller
{

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

    public function CheckOwnershipChange()
    {
        $CheckOwnershipChange = OwnershipChange::all();
        $user = auth()->user(); // Assuming you have a logged-in user
        return view('admin.CheckOwnershipChange',compact('CheckOwnershipChange','user'));
    }

}
