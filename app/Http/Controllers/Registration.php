<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\registeruser;
use App\Models\RegisteredUser;


class Registration extends Controller{

    public function create()
    {
        return view('upload');
    }
    
    public function stores(Request $req){
        //dd($req->all());

        $req->validate([
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
            'Email' => 'required|email|unique:registerusers',
            'fnic' => 'required|file|mimes:jpeg,png,jpg,gif|max:5096', // Adjust the allowed file types and maximum size as needed
            'bnic' => 'required|file|mimes:jpeg,png,jpg,gif|max:5096',
            'deed' => 'nullable|file|mimes:pdf|max:25000',
            'plan' => 'nullable|file|mimes:pdf|max:25000',
            'Confirm' => 'nullable|file|mimes:pdf|max:25000',
            'recom' => 'nullable|file|mimes:pdf|max:25000',
            'CopyReg' => 'nullable|file|mimes:pdf|max:25000',
            'license' => 'nullable|file|mimes:pdf|max:25000',
            'recomd' => 'nullable|file|mimes:pdf|max:25000',
            

    // Other validation rules go here...
        ]

        
        
        , [
            'contact.regex' => 'The Contact Number format is invalid. Please enter a valid format.',

            'fnic.required' => 'Please upload the Front Image of NIC.',
            'fnic.file' => 'The Front Image of NIC must be a file.',
            'fnic.mimes' => 'Upload the Front Image of NIC correctly. (Allowed types: jpeg, png, jpg, gif)',
            'fnic.max' => 'The Front Image of NIC should not exceed 5096 KB in size.',

            'bnic.required' => 'Please upload the Back Image of NIC.',
            'bnic.file' => 'The Back Image of NIC must be a file.',
            'bnic.mimes' => 'Upload the Back Image of NIC correctly. (Allowed types: jpeg, png, jpg, gif)',
            'bnic.max' => 'The Back Image of NIC should not exceed 5096 KB in size',

            'deed.mimes' => 'Upload the Deed/Tax Deed correctly. (Allowed type:pdf)',
            'plan.mimes' => 'Upload the Plan(පිඹුර) correctly. (Allowed type:pdf)',
            'Confirm.mimes' => 'Upload the Affidavit of confirm authority correctly. (Allowed type:pdf)',
            'recom.mimes' => 'Upload the Recommendation of Divisional Secretary correctly. (Allowed type:pdf)',
            'CopyReg.mimes' => 'Upload the Certificate of Registration and Revenue License correctly. (Allowed type:pdf)',
            'license.mimes' => 'Upload the Protection License correctly. (Allowed type:pdf)',
            'recomd.mimes' => 'Upload the Recommendation of Divisional Secretary correctly. (Allowed type:pdf)',



            
        ]); 

        $fnicPath = null;
        $bnicPath = null;
        $deedPath = null;
        $planPath = null;
        $ConfirmPath = null;
        $recomPath = null;
        $CopyRegPath = null;
        $licensePath = null;
        $recomdPath = null;

        if ($req->hasFile('fnic')) {
            $fnicPath = $req->file('fnic')->store('uploads', 'public');
        }

        if ($req->hasFile('bnic')) {
            $bnicPath = $req->file('bnic')->store('uploads', 'public');
        }

        if ($req->hasFile('deed')) {
            $deedPath = $req->file('deed')->store('uploads', 'public');
        }

        if ($req->hasFile('plan')) {
            $planPath = $req->file('plan')->store('uploads', 'public');
        }

        if ($req->hasFile('Confirm')) {
            $ConfirmPath = $req->file('Confirm')->store('uploads', 'public');
        }

        if ($req->hasFile('recom')) {
            $recomPath = $req->file('recom')->store('uploads', 'public');
        }

        if ($req->hasFile('CopyReg')) {
            $CopyRegPath = $req->file('CopyReg')->store('uploads', 'public');
        }

        if ($req->hasFile('license')) {
            $licensePath = $req->file('license')->store('uploads', 'public');
        }

        if ($req->hasFile('recomd')) {
            $recomdPath = $req->file('recomd')->store('uploads', 'public');
        }
        

        $registeruser = new Registeruser([
            'id'=>$req->input('id'),
            'idno' => $req->input('idno'),
            'fname' => $req->input('fname'),
            'address' => $req->input('address'),
            'fnic' => $fnicPath, // Store the file path
            'bnic' => $bnicPath, // Store the file path
            'contact' => $req->input('contact'),
            'Email' => $req->input('Email'),
            'RegNoT'=> $req->input('RegNoT'),
            'RegNotrailer'=> $req->input('RegNotrailer'),
            'CopyReg'=> $CopyRegPath,
            'MTS'=> $req->input('MTS'),
            'StDate'=> $req->input('StDate'),
            'Vtime'=> $req->input('Vtime'),
            'license'=>$licensePath,
            'recomd'=> $recomdPath,
            'wsadd'=> $req->input('wsadd'),
            'nland'=> $req->input('nland'),
            'ownerofland'=> $req->input('ownerofland'),
            'deed'=> $deedPath,
            'plan'=> $planPath,
            'Confirm'=> $ConfirmPath,
            'nameofwshed'=> $req->input('nameofwshed'),
            'district'=> $req->input('district'),
            'DSsection'=> $req->input('DSsection'),
            'gnKottasaya'=> $req->input('gnKottasaya'),
            'Lgovernment'=> $req->input('Lgovernment'),
            'recom'=> $recomPath,
            'nature_value' => json_encode($req->nature),
        ]);

        $registeruser->save();

        return redirect('/Registration');
    }

    public function CheckRegistration() {
        $CheckRegistration = registeruser::all();
        return view('admin.CheckRegistration',compact('CheckRegistration'));
    }
    
    public function view_record($id) {
        $data = registeruser::find($id);
        return view('admin.UsersInfo', compact('data'));
    }

    function remove($id, Request $req){
        $data=RegisteredUser::find($id);
        $data->delete();

        //$req->session()->flash('Success2','User deleted Successfully');
        return redirect('/CheckRegistration');
    }

    function reject($id){
        registeruser::destroy($id);
        return redirect('/CheckRegistration');

    }
    
    
    

}
