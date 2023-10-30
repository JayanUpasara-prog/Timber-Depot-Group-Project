<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\persanolinfo;
use App\Models\MobileSawmill;
use App\Models\Sawmill;



class RegisterUserController extends Controller
{
    public function stores(Request $req){
        //dd($req->all());

        $persanolinfo =new persanolinfo;
        $persanolinfo->idno=$req->idno;
        $persanolinfo->fname=$req->fname;
        $persanolinfo->address=$req->address;
        $persanolinfo->fnic=$req->fnic;
        $persanolinfo->bnic=$req->bnic;
        $persanolinfo->contact=$req->contact;
        $persanolinfo->email=$req->email;

        $MobileSawmill =new MobileSawmill;
        $MobileSawmill->idno=$req->idno;
        $MobileSawmill->RegNoT=$req->RegNoT;
        $MobileSawmill->RegNotrailer=$req->RegNotrailer;
        $MobileSawmill->CopyReg=$req->CopyReg;
        $MobileSawmill->MTS=$req->MTS;
        $MobileSawmill->StDate=$req->StDate;
        $MobileSawmill->Vtime=$req->Vtime;
        $MobileSawmill->license=$req->license;
        $MobileSawmill->recomd=$req->recomd;

        $Sawmill =new Sawmill;
        $Sawmill->idno=$req->idno;
        $Sawmill->wsadd=$req->wsadd;
        $Sawmill->nland=$req->nland;
        $Sawmill->ownerofland=$req->ownerofland;
        $Sawmill->deed=$req->deed;
        $Sawmill->plan=$req->plan;
        $Sawmill->Confirm=$req->Confirm;
        $Sawmill->nameofwshed=$req->nameofwshed;
        $Sawmill->district=$req->district;
        $Sawmill->DSsection=$req->DSsection;
        $Sawmill->gnKottasaya=$req->gnKottasaya;
        $Sawmill->Lgovernment=$req->Lgovernment;
        $Sawmill->recom=$req->recom;
        //$Sawmill->sawmill=$req->Sawmill;
       // $Sawmill->TSOutlet=$req->Timber_sales_outlet;
        //$Sawmill->seasoning=$req->Seatimbersoning_or_processing_factory;
        //$Sawmill->Cshed=$req->Carpentry_shed;
        //$Sawmill->furniture=$req->Timber_furniture_shop;
        //$Sawmill->FWshed=$req->Fire_wood_shed;


        $persanolinfo->save();
        $MobileSawmill->save();
        $Sawmill->save();

        return redirect()->back();

        
    }

}
