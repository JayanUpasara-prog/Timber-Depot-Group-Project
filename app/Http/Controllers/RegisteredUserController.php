<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RegisteredUser;
use App\Models\registeruser;

class RegisteredUserController extends Controller
{

    public function UsersInfo()
    {
        return view('admin.UsersInfo');
    }

    public function viewUsers(){
        $data = Registeruser::all();
        return view('admin.UsersInfo', ['registerusers' => $data]);
    }
    
    

    // public function RegisterdUserstores(Request $req){

    //     $RegisteredUser = new RegisteredUser([
    //         'id'=>$req->input('id'),
    //         'idno' => $req->input('idno'),
    //         'fname' => $req->input('fname'),
    //         'address' => $req->input('address'),
    //         'fnic' => $fnicPath, // Store the file path
    //         'bnic' => $bnicPath, // Store the file path
    //         'contact' => $req->input('contact'),
    //         'Email' => $req->input('Email'),
    //         'RegNoT'=> $req->input('RegNoT'),
    //         'RegNotrailer'=> $req->input('RegNotrailer'),
    //         'CopyReg'=> $CopyRegPath,
    //         'MTS'=> $req->input('MTS'),
    //         'StDate'=> $req->input('StDate'),
    //         'Vtime'=> $req->input('Vtime'),
    //         'license'=>$licensePath,
    //         'recomd'=> $recomdPath,
    //         'wsadd'=> $req->input('wsadd'),
    //         'nland'=> $req->input('nland'),
    //         'ownerofland'=> $req->input('ownerofland'),
    //         'deed'=> $deedPath,
    //         'plan'=> $planPath,
    //         'Confirm'=> $ConfirmPath,
    //         'nameofwshed'=> $req->input('nameofwshed'),
    //         'district'=> $req->input('district'),
    //         'DSsection'=> $req->input('DSsection'),
    //         'gnKottasaya'=> $req->input('gnKottasaya'),
    //         'Lgovernment'=> $req->input('Lgovernment'),
    //         'recom'=> $recomPath,
    //         'nature_value' => json_encode($req->nature),


    //     ]);

    //     $RegisteredUser->save();
    // }
}
