<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AcceptanceMail;
use Illuminate\Support\Facades\DB;
use App\Models\RegisteredUser;
use App\Mail\renewMail;
use App\Models\User;
use App\Models\registeruser;
use Illuminate\Support\Facades\Mail;
use App\Mail\rejectmessage;
use Carbon\Carbon;




class RegisteredUserController extends Controller
{

    public function UsersInfo()
    {
        return view('admin.UsersInfo');
    }

    public function viewUsers()
    {
        $data = RegisteredUser::all();
        return view('admin.UsersInfo', ['registeredUsers' => $data]);
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
            'fnic' => $data->fnic,
            'bnic' => $data->bnic, 
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
            'total'=>$data->total,
            'registration_date'=> $data->registration_date,
        ]);

        $RegisteredUser->save();

        $user = registeruser::find($id);
        Mail::to($user->Email)->send(new AcceptanceMail());

        
        $data = registeruser::find($id);
        $data->delete();
        return redirect('/CheckRegistration')->with('success', 'Form accepted and email sent to the user.');

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
        $user = auth()->user(); 
        return view('admin.ViewRegisteredUsers',compact('ViewRegisteredRecords','user'));
    }

    public function ViewRecords($id){
        $data = RegisteredUser::find($id);
        $user = auth()->user(); 
       // dd($data); 
        return view('admin.RegisteredUserPage', compact('data','user'));
    }
    

    public function showProfile(){
        $user = auth()->user();
        $RegisteredUser = RegisteredUser::where('Email', $user->email)->first();
    
        if (!$RegisteredUser) {
            return redirect('/UserDashboard')->with('fail', 'No data found for renewal. You have to fill the regitration form first.');
        }
    
        return view('user.renew', compact('user', 'RegisteredUser'));
    }
    
    public function submitRenewal(Request $request) {
        $user = auth()->user();
        $RegisteredUser = RegisteredUser::where('Email', $user->email)->first();
    
       
        $RegisteredUser->registration_date = now(); 
    
       
        $RegisteredUser->save();
    
        Mail::to($user->email)->send(new renewMail($RegisteredUser));
    
return redirect()
->route('user.renewCheckout')
->with('success', 'Renewal Pending & Redirect to Payment.')
->with('form-submitted', true);
    }
    

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
    
       
        $searchResults = RegisteredUser::where('id', 'like', "%$searchTerm%")
            ->orWhere('idno', 'like', "%$searchTerm%")
            ->orWhere('fname', 'like', "%$searchTerm%")
            ->get();
    
       
        return view('admin.ViewRegisteredUsers', ['ViewRegisteredRecords' => $searchResults]);
    }


    public function showRenewCheckout() {
        
        return view('user.renewCheckout');
    }
    


    
}