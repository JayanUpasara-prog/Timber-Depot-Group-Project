<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AcceptanceMail;
use Illuminate\Support\Facades\DB;
use App\Models\registeruser;
use App\Models\RegisteredUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

use App\Models\WildCriminal;


class Registration extends Controller{

    public function create()
    {
        return view('upload');
    }
    
    public function stores(Request $req){
        //dd($req->all());

        $req->validate([
            'fname' => 'required|regex:/^[a-zA-Z\s.]+$/',
            'idno' => [
                'required',
                function ($attribute, $value, $fail) {
                  
                    if (!preg_match('/^[1-9][0-9]{8}v$/i', $value)) {
                    
                        if (!preg_match('/^[0-9]{12}$/', $value)) {
                            $fail("The NIC Number format is invalid. Please enter a valid format.");
                        }
                    }
                },
            ],


            'contact' => 'required|regex:/^0[0-9]{9}$/',
            'Email' => 'required|email|unique:registerusers',
            'fnic' => 'required|file|mimes:jpeg,png,jpg,gif|max:5096', 
            'bnic' => 'required|file|mimes:jpeg,png,jpg,gif|max:5096',
            'deed' => 'nullable|file|mimes:pdf|max:25000',
            'plan' => 'nullable|file|mimes:pdf|max:25000',
            'Confirm' => 'nullable|file|mimes:pdf|max:25000',
            'recom' => 'nullable|file|mimes:pdf|max:25000',
            'CopyReg' => 'nullable|file|mimes:pdf|max:25000',
            'license' => 'nullable|file|mimes:pdf|max:25000',
            'recomd' => 'nullable|file|mimes:pdf|max:25000',
            

   
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
            'fnic' => $fnicPath, 
            'bnic' => $bnicPath, 
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
            'total' => $req->input('totalAmount'), 
            'registration_date'=> $req->input('registration_date'),
        ]);

        $res=$registeruser->save();

        if ($res) {
            return Redirect::route('registration.success')->with('success', 'Data saved successfully!');
        } else {
            return back()->with('fail', 'Something went wrong')->withErrors(['fail' => 'Something went wrong']);
        }

      
    }

    public function registrationSuccess()
    {
        return view('user.checkout');
    }

    public function CheckRegistration() {
        $CheckRegistration = registeruser::all();
        $user = auth()->user(); 
        return view('admin.CheckRegistration', compact('CheckRegistration', 'user'));
    }
    
    
    public function view_record($id) {
        $data = registeruser::find($id);
        $user = auth()->user(); 
        return view('admin.UsersInfo', compact('data','user'));
    }
    

   


    function reject($id){
        registeruser::destroy($id);
        return redirect('/CheckRegistration');

    }
    
    public function showCheckRegistration(Request $request)
{
    $search = $request->input('search');

    $CheckRegistration = registeruser::when($search, function ($query) use ($search) {
        $query->where('id', $search)
              ->orWhere('idno', 'like', '%' . $search . '%')
              ->orWhere('fname', 'like', '%' . $search . '%');
    })->get();

    return view('admin.CheckRegistration', compact('CheckRegistration'));
}
    
public function searchUsers(Request $request)
{
    $searchTerm = $request->input('search');

  
    $searchResults = registeruser::where('idno', 'like', "%$searchTerm%")
        ->orWhere('fname', 'like', "%$searchTerm%")
        ->orWhere('address', 'like', "%$searchTerm%")
        ->orWhere('contact', 'like', "%$searchTerm%")
        ->orWhere('Email', 'like', "%$searchTerm%")
        ->first(); 
    
    return view('admin.UsersInfo', ['data' => $searchResults, 'searchTerm' => $searchTerm]);
}


public function CriminalView($idno) {
  
    $userData = registeruser::where('idno', $idno)->first();

   
    return view('admin.CriminalView', ['userData' => $userData]);
}








}