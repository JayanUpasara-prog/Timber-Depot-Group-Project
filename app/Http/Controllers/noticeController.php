<?php

// app/Http/Controllers/NoticeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeAndGazette;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'notice' => 'sometimes|string',
        'gazette' => 'sometimes|file|mimes:pdf|max:10240', 
    ]);

    $data = [];

    if ($request->has('notice')) {
        $data['notice'] = $request->input('notice');
    }

    if ($request->hasFile('gazette')) {
        $file = $request->file('gazette');
        $fileName = $file->getClientOriginalName();

        $file->storeAs('gazettes', $fileName, 'public'); 

        $data['gazette'] = $fileName;
    }

    NoticeAndGazette::create($data);

    return redirect()->back()->with('success', 'Notice submitted successfully.');
}

public function viewNotice() {
    $viewNotice = noticeAndGazette::all();
    return view('homepage.inner-page2',compact('viewNotice'));
}


}



