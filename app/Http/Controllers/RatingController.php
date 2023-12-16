<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;
use App\Models\User;

class RatingController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('user.create',compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'user_name' => 'required|string',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'nullable|string',
        ]);

        $data = $request->except('_token');

        Rating::create($data);

        return redirect()->route('user.create')->with('success', 'Rating submitted successfully!');
    }


    public function ViewRating()
{
    $ratings = Rating::all();
    return view('homepage.homepage', compact('ratings'));
}

//change
public function AdminViewRating()
{
    $ratings = Rating::latest()->take(30)->get();
    $user = auth()->user(); // Assuming you have a logged-in user
    return view('admin.AdminViewRating', compact('ratings','user'));
}

public function deleteRating($id)
{
    $rating = Rating::find($id);

    if (!$rating) {
        return redirect()->route('admin.AdminViewRating')->with('error', 'Rating not found');
    }

    $rating->delete();

    return redirect()->route('admin.AdminViewRating')->with('success', 'Rating deleted successfully');
}



    
}
