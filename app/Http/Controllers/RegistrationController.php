<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WildCriminal;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class RegistrationController extends Controller
{

    //show data part
    //show data part
public function index()
{
    $registrations = User::all();
    $user = []; // Add this line to define $user
    if (Session::has('loginId')) {
        $user = User::where('id', '=', Session::get('loginId'))->first();
    }
    return view('reg.index', ['registrations' => $registrations, 'user' => $user]);
}


    //register form
    public function register()
    {
        return view('reg.register');
    }

    //register part
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s.]+$/',
            'email' => 'required|email|unique:users,email',
            
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
      
            'password' => ['required', 'min:8', 'max:12', function ($attribute, $value, $fail) {
                if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]+$/', $value)) {
                    $fail("The password must contain as required ");
                }
            }]        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
    
        // if ($request->hasFile('profile_picture')) {
        //     $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');
        //     $user->profile_picture = $profilePicture;
        // }


        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return back()->with('fail', 'Email already exists. Please use a different email address.');
        }
    
        $res = $user->save();
    
        if ($res) {
            return redirect('/login')->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    

    //edit part
    public function edit(User $registration) 
    {
        return view('reg.edit', ['registration' => $registration]);
    }


    //update part
    public function update(User $registration, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s.]+$/',
            'email' => 'required|email|unique:users,email,' . $registration->id,
            'password' => ['required', 'min:8', 'max:12', function ($attribute, $value, $fail) {
                if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]+$/', $value)) {
                    $fail("The password must contain as required ");
                }
            }]
            
        ]);
        
    
        
        $registration->name = $data['name'];
        $registration->email = $data['email'];
    
       
        if ($data['password']) {
            $registration->password = Hash::make($data['password']);
        }
        
    
        $registration->save();
    
        return redirect(route('reg.index'))->with('success', 'Updated Successfully');
    }
    

    //delete part
    public function destroy(User $registration) 
    {
        $registration->delete();
        return redirect(route('reg.index'))->with('success', 'Deleted Successfully');
    }


    //login form
    public function login()
    {
        return view('log.login');
    }

    //login part
    public function check(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8|max:12',
    ]);

    $credentials = [
        'email' => $request->email,
        'password' => $request->password
    ];

    // Attempt to authenticate using Auth::attempt()
    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Set session and redirect based on the user's role
        if ($user->role == '0') {
            $redirectRoute = 'UserDashboard';
            $message = 'User login success';
        } else {
            $redirectRoute = 'AdminDashboard';
            $message = 'Admin login success';
        }

        $request->session()->put('loginId', $user->id);

        return redirect($redirectRoute)->with('success', $message);
    }

    // Authentication failed with Auth::attempt()
    
    // Manually retrieve the user for additional checks
    $user = User::where('email', $request->email)->first();

    if ($user) {
        return back()->with('fail', 'Password does not match');
    } else {
        return back()->with('fail', 'This email is not registered');
    }
}


    //user dashboard
    public function UserDashboard(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        
        return view('user.UserDashboard', compact('user'));
    }
    

   

    // public function AdminDashboard(){
    
    //     $user = array();
    //     if(Session::has('loginId')){
    //         $user = User::where('id','=', Session::get('loginId'))->first();

    //         }
    //     return view('admin.AdminDashboard', compact('user'));
    // }

    public function Help(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.Help', compact('user'));
    }

    public function OwnershipChange(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.OwnershipChange', compact('user'));
    }

    public function PermitRequest(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.PermitRequest', compact('user'));
    }

    public function Registration(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.Registration', compact('user'));
    }

    public function Renew(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.Renew', compact('user'));
    }

    public function SB_LogsTimber(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.SB_LogsTimber', compact('user'));
    }
    public function SB_SawnTimber(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.SB_SawnTimber', compact('user'));
    }
    public function SB_UpdateLogsTimber(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.SB_UpdateLogsTimber', compact('user'));
    }
    public function SB_UpdateSawnTimber(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.SB_UpdateSawnTimber', compact('user'));
    }
    public function StockBookUpdate(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.StockBookUpdate', compact('user'));
    }
    

    
    public function UserLogout(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.UserLogout', compact('user'));
    }

    public function checkout(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.checkout', compact('user'));
    }

    public function create(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('user.create', compact('user'));
    }

    

   

     //admin dashboard
     public function AdminDashboard(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        
        return view('admin.AdminDashboard', compact('user'));
    }

    // public function CheckRegistration(){
    
    //     $user = array();
    //     if(Session::has('loginId')){
    //         $user = User::where('id','=', Session::get('loginId'))->first();

    //         }
    //     return view('admin.CheckRegistration', compact('user'));
    // }

    public function CheckRegistration() {
        $user = array();
        if (Session::has('loginId')) {
            $user = User::where('id', '=', Session::get('loginId'))->first();
        }
    
        return view('admin.CheckRegistration', compact('user'));
    }
    

    public function CheckRenew(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('admin.CheckRenew', compact('user'));
    }

    public function CheckOwnershipChange(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('admin.CheckOwnershipChange', compact('user'));
    }

    public function CheckPermitRequest(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('admin.CheckPermitRequest', compact('user'));
    }

    public function CheckStockBookUpdate(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('admin.CheckStockBookUpdate', compact('user'));
    }

    public function CustomerSupport(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('admin.CustomerSupport', compact('user'));
    }

    public function WildCriminals(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('admin.WildCriminals', compact('user'));
    }

    public function Logoutnew(){
    
        $user = array();
        if(Session::has('loginId')){
            $user = User::where('id','=', Session::get('loginId'))->first();

            }
        return view('admin.Logout', compact('user'));
    }

    public function WildCriminalsPost(Request $request)
{
    
    $wild = $request->validate([
       'idnum' => [
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
            'name' => 'required|regex:/^[a-zA-Z\s.]+$/'


       
    ]);

    
    $wildCriminal = new WildCriminal();

    $wildCriminal->name = $request->input('name');
    $wildCriminal->idnum = $request->input('idnum');
    $wildCriminal->address = $request->input('Address');
    
    $wildCriminal->save();

    
    return redirect()->route('admin.WildCriminals')->with('success', 'Record entered successfully');
}

public function CriminalView(){
    $criminals = WildCriminal::all();
    return view('admin.CriminalView', ['criminals' => $criminals]);
}

 //delete part

 public function destroyCriminal(WildCriminal $criminal) 
 {
     $criminal->delete();
     return redirect(route('admin.CriminalView'))->with('success', 'Deleted Successfully');
 }
    

    public function logout(){
        if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login');
        }
    }

    // app/Http/Controllers/YourController.php



public function search(Request $request)
{
    $searchTerm = $request->input('search');

    // Perform the search using your model
    $searchResults = User::where('id', 'like', "%$searchTerm%")
        ->orWhere('name', 'like', "%$searchTerm%")
        ->orWhere('email', 'like', "%$searchTerm%")
        ->get();

    // Pass the results to your view
    return view('reg.index', ['registrations' => $searchResults]);
}

public function editProfilePicture()
    {
        $user = Auth::user();
        return view('editProfilePicture', compact('user'));
    }

    /**
     * Update the user's profile picture.
     */
    public function updateProfilePicture(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Check if a profile picture is uploaded
    if ($request->hasFile('profile_picture')) {
        // Store the new profile picture in the storage folder
        $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');

        // Update the user's profile_picture column in the database
        $user->update([
            'profile_picture' => $profilePicture,
        ]);
    }
    // Fetch the user again to ensure the updated profile_picture is available
    $user = Auth::user();

    return redirect()->back()->with('success', 'Profile picture updated successfully!');
}



public function showCheckCriminal(Request $request)
{
    $search = $request->input('search');

    $criminals = WildCriminal::when($search, function ($query) use ($search) {
        $query->where('idnum', $search)
              ;
    })->get();

    return view('admin.CriminalView', compact('criminals'));
}

public function CheckRegistrationnew() {
    $user = array();
    if (Session::has('loginId')) {
        $user = User::where('id', '=', Session::get('loginId'))->first();
    }

    return view('admin.CheckRegistration', compact('user'));
}            





}
