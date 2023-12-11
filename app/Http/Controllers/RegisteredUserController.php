<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RegisteredUser;
use App\Models\registeruser;
use Illuminate\Support\Facades\Mail;
use App\Mail\rejectmessage;



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
    
    

    public function saveUsers($id,Request $req)
    {
        $data = registeruser::find($id);
        $decodedNature = json_decode($data->nature, true);

     
            

        $RegisteredUser = new RegisteredUser([
            'id'=>$data->id,
            'idno' => $data->idno,
            'fname' => $data->fname,
            'address' => $data->address,
            'fnic' => $data->fnic,// Store the file path
            'bnic' => $data->bnic, // Store the file path
            'contact' => $data->contact,
            'Email' => $data->Email,
            'RegNoT'=> $data->RegNoT,
            'RegNotrailer'=> $data->RegNotrailer,
            'CopyReg'=> $data->CopyReg,
            'MTS'=> $data->MTS,
            'StDate'=> $data->StDate,
            'Vtime'=> $data->Vtime,
            'license'=>$data->license,
            'recomd'=> $data->recomd,
            'wsadd'=> $data->wsadd,
            'nland'=> $data->nland,
            'ownerofland'=> $data->ownerofland,
            'deed'=> $data->deed,
            'plan'=> $data->plan,
            'Confirm'=> $data->Confirm,
            'nameofwshed'=> $data->nameofwshed,
            'district'=> $data->district,
            'DSsection'=> $data->DSsection,
            'gnKottasaya'=> $data->gnKottasaya,
            'Lgovernment'=> $data->Lgovernment,
            'recom'=> $data->recom,
            'nature_value' => json_encode($data->nature_value),
        ]);

        $RegisteredUser->save();

        // Remove the user from the registeruser table
        $data = registeruser::find($id);
        $data->delete();

        return redirect('/CheckRegistration')->with('Success2', 'User accepted and moved to registered_users table successfully.');
    }

    public function send(Request $req){

        $data = [
            'email' => $req->email,
            'message' => $req->message,
        ];

      Mail::to($data['email'])->send(new rejectmessage($data));
       
        return back()->with(['success' => 'Message sent successfully']);
    }

    public function ViewRegisteredRecords(){
        $ViewRegisteredRecords=RegisteredUser::all();
        return view('admin.ViewRegisteredUsers',compact('ViewRegisteredRecords'));
    }

    public function ViewRecords($id){
        $data=RegisteredUser::find($id);
        return view('admin.RegisteredUserPage',compact('data'));
    }


}
