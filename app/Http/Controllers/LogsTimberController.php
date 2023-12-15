<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogsTimber;

class LogsTimberController extends Controller
{
    public function create(){
        return view('logstimbers.create');
    }
    
    // public function store(Request $request){
        // dd($request);

        //return view('logstimbers.store');       

        // // $newLogsTimber = LogsTimber::create($data);
        // $logstimber = new LogsTimber([
        //     'date'=>$request->input('date'),
        //     'species'=>$request->input('species'),
        //     'numlogs1'=>$request->input('numlogs1'),
        //     'volume1'=>$request->input('volume1'),
        //     'numlogs2'=>$request->input('numlogs2'),
        //     'volume2'=>$request->input('volume2'),
        //     'sourceoflogs'=>$request->input('sourceoflogs'),
        //     'numlogs3'=>$request->input('numlogs3'),
        //     'volume3'=>$request->input('volume3'),
        //     'numlogs4'=>$request->input('numlogs4'),
        //     'volume4'=>$request->input('volume4'),        
        // ]);

        // // $logstimber->save();
        
        // return redirect(route('SB_UpdateLogsTimber'))->with('success', 'Record Saved Successfully');
    // }

    public function store(Request $request){
        dd($request);
        // // LogsTimber::create($request->all());

        // $data = $request->validate([
        //     'date' => 'required|Date',
        //     'species' => 'required',
        //     'sourceoflogs' => 'required'            
        // ]);
        
        // $logstimber=new LogsTimber;
        // // $logstimber->date=$request->date;
        // $logstimber->save();

        return redirect(route('SB_UpdateLogsTimber'))->with('success', 'Record Saved Successfully');
    }

    // public function 
}
