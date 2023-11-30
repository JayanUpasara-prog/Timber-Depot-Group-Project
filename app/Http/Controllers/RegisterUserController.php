<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\persanolinfo;
use App\Models\MobileSawmill;
use App\Models\Sawmill;



class RegisterUserController extends Controller
{
    
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
            'email' => 'required|email|unique:users',
            'fnic' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and maximum size as needed
            'bnic' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
    // Other validation rules go here...
        ], [
            'contact.regex' => 'The Contact Number format is invalid. Please enter a valid format.',
            'fnic.required' => 'Please upload the Front Image of NIC.',
            'bnic.required' => 'Please upload the Back Image of NIC.',
            'fnic.file' => 'The Front Image of NIC must be a file.',
            'bnic.file' => 'The Back Image of NIC must be a file.',
            'fnic.mimes' => 'Upload the Front Image of NIC correctly. (Allowed types: jpeg, png, jpg, gif)',
            'bnic.mimes' => 'Upload the Back Image of NIC correctly. (Allowed types: jpeg, png, jpg, gif)',
            'fnic.max' => 'The Front Image of NIC should not exceed 2048 KB in size.',
            'bnic.max' => 'The Back Image of NIC should not exceed 2048 KB in size',
        ]);

        $persanolinfo =new persanolinfo;
        $persanolinfo->idno=$req->idno;
        $persanolinfo->fname=$req->fname;
        $persanolinfo->address=$req->address;
        $persanolinfo->fnic=$req->fnic;
        $persanolinfo->bnic=$req->bnic;
        $persanolinfo->contact=$req->contact;
        $persanolinfo->email=$req->email;

        $MobileSawmill =new MobileSawmill;
        $MobileSawmill->idno=$req->idno;
        $MobileSawmill->RegNoT=$req->RegNoT;
        $MobileSawmill->RegNotrailer=$req->RegNotrailer;
        $MobileSawmill->CopyReg=$req->CopyReg;
        $MobileSawmill->MTS=$req->MTS;
        $MobileSawmill->StDate=$req->StDate;
        $MobileSawmill->Vtime=$req->Vtime;
        $MobileSawmill->license=$req->license;
        $MobileSawmill->recomd=$req->recomd;
       

        $Sawmill =new Sawmill;
        $Sawmill->idno=$req->idno;
        $Sawmill->wsadd=$req->wsadd;
        $Sawmill->nland=$req->nland;
        $Sawmill->ownerofland=$req->ownerofland;
        $Sawmill->deed=$req->deed;
        $Sawmill->plan=$req->plan;
        $Sawmill->Confirm=$req->Confirm;
        $Sawmill->nameofwshed=$req->nameofwshed;
        $Sawmill->district=$req->district;
        $Sawmill->DSsection=$req->DSsection;
        $Sawmill->gnKottasaya=$req->gnKottasaya;
        $Sawmill->Lgovernment=$req->Lgovernment;
        $Sawmill->recom=$req->recom;
        $Sawmill->nature_value=json_encode($req->nature);

        $persanolinfo->save();
        $MobileSawmill->save();
        $Sawmill->save();

        return redirect()->back();

        
    }

}
