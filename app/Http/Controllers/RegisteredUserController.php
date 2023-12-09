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

        // $RegisteredUser = new RegisteredUser;
        // $RegisteredUser->id = $data->id;
        // $RegisteredUser->idno = $data->idno;
        // $RegisteredUser->fname = $data->fname;
        // $RegisteredUser->address = $data->address;
            

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
            'nature_value' =>$data->nature,
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


      //  Mail::to('{{ $data->Email }}')->send(new rejectmessage($data));
      // Assuming $data contains the necessary data, including the email address
      Mail::to($data['email'])->send(new rejectmessage($data));


        
        //Session::flash('success', 'Message sent successfully!');
        //return redirect()->route('contact.show');
       
        return back()->with(['success' => 'Message sent successfully']);
    }

}
