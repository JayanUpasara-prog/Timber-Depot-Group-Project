<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\registeruser;

class Registration extends Controller{

    /*Inputed data get from the getdata function*/
    /*function getdata(Request $req){
        return $req->input();
    }*/

    /*Give the validation for the field*/
    /*{
        function getdata(Request $req){
            $req->validate([
                'fname'=>'required',
                'address'=>'required'
            ]);
            return $req->input();
        }
    }*/


    /*function index(){
        return DB::select("select * from registerusers");
    }*/

    /*Get data from the table of registeruser*/
    /*function getData(){
        return registeruser::all();
    }*/

    public function store(Request $req){
        //dd($req->all());

        $registeruser =new registeruser;
        $registeruser->idno=$req->idno;
        $registeruser->fname=$req->fname;
        $registeruser->save();
    }

}

