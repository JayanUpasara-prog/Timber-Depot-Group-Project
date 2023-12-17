<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnershipChange extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'idno',
        'fname',
        'address',
        'contact',
        'Email'
    ];

    public function registeredUser()
    {
        return $this->belongsTo(RegisteredUser::class, 'userid', 'id');
    }
}
