<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermitRequest;
use App\Models\RegisteredUser;
use App\Models\User;
use App\Models\registeruser;
use Illuminate\Support\Facades\Mail;
use App\Mail\permitMail;

use App\Mail\rejectmessage;

use App\Models\AcceptedPermitRequest;




class PermitRequestController extends Controller
{

    public function ViewPermitRequest()
    {
        
        return view('user.PermitRequest');
    }


    public function storepermit(Request $request)
    {
    
        
        // Validation rules for the PermitRequest module
        $request->validate([
            'national_id_number' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'traveling_date' => 'required|date',
            'traveling_distance' => 'required|numeric',
            'receiver_address' => 'required|string|max:255',
            'vehicle_number' => 'required|string|max:255',
            'timber_type' => 'required|string|max:255',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'thickness' => 'required|numeric',
            'count' => 'required|integer',
        ], [
            // Add custom error messages if needed...
        ]);

        // Process and store data for the PermitRequest module
        $permitRequest = new PermitRequest([
            'id'=>$request->input('id'),
            'national_id_number' => $request->input('national_id_number'),
            'contact_number' => $request->input('contact_number'),
            'email' => $request->input('email'),
            'traveling_date' => $request->input('traveling_date'),
            'traveling_distance' => $request->input('traveling_distance'),
            'receiver_address' => $request->input('receiver_address'),
            'vehicle_number' => $request->input('vehicle_number'),
            'timber_type' => $request->input('timber_type'),
            'length' => $request->input('length'),
            'width' => $request->input('width'),
            'thickness' => $request->input('thickness'),
            'count' => $request->input('count'),
        ]);
        
        $permitRequest->save();

        //dd($permitRequest);

       
        // Redirect with success message
        return back()->with('success', 'Permit request stored successfully.');
    }

    public function viewPermit(){
        $viewPermit=PermitRequest::all();
        //$user = auth()->user(); 
        return view('admin.ViewPermitRequests',compact('viewPermit'));
    }

    public function viewPermitRecord($id) {
        $data = PermitRequest::find($id);
        $user = auth()->user(); // Assuming you have a logged-in user
        return view('admin.PermitRequestsInfo', compact('data','user'));
    }
    
    public function savePermits($id,Request $req){
        $data = PermitRequest::find($id);

        $AcceptedPermitRequest = new AcceptedPermitRequest([
            'id'=>$data->id,
            'national_id_number' => $data->national_id_number,
            'contact_number' => $data->contact_number,
            'email' => $data->email,
            'traveling_date' => $data->traveling_date,// Store the file path
            'traveling_distance' => $data->traveling_distance, // Store the file path
            'receiver_address' => $data->receiver_address,
            'vehicle_number' => $data->vehicle_number,
            'timber_type'=> $data->timber_type,
            'length'=> $data->length,
            'width'=> $data->width,
            'thickness'=> $data->thickness,
            'count'=> $data->count,
        ]);

        $AcceptedPermitRequest->save();

        $user = PermitRequest::find($id);
        Mail::to($user->email)->send(new permitMail());

        $data = PermitRequest::find($id);
        $data->delete();
        return redirect('/ViewPermitRequests')->with('success', 'Form accepted and email sent to the user.');

    }

    function reject($id){
        PermitRequest::destroy($id);
        return redirect('/ViewPermitRequests');

    }

     public function send(Request $req){

        $data = [
            'email' => $req->email,
            'message' => $req->message,
        ];

      Mail::to($data['email'])->send(new rejectmessage($data));
       
        return back()->with(['success' => 'Message sent successfully']);
    }



      
    
}