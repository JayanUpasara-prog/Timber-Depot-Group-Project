<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitRequest extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'id',
        'national_id_number',
        'contact_number',
        'email',
        'traveling_date',
        'traveling_distance',
        'receiver_address',
        'vehicle_number',
        'timber_type',
        'length',
        'width',
        'thickness',
        'count',
    ];
}
