<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registeruser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'idno',
        'fname',
        'address',
        'fnic',
        'bnic',
        'contact',
        'Email',
        'RegNoT',
        'RegNotrailer',
        'CopyReg',
        'MTS',
        'StDate',
        'Vtime',
        'license',
        'recomd',
        'wsadd',
        'nland',
        'ownerofland',
        'deed',
        'plan',
        'Confirm',
        'nameofwshed',
        'district',
        'DSsection',
        'gnKottasaya',
        'Lgovernment',
        'recom',
        'nature_value',
        'total',
        'registration_date',
       
       
    ];

    public function wildCriminal()
    {
        return $this->hasOne(WildCriminal::class, 'idno', 'idnum');
    }
}
