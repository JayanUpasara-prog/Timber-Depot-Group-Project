<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WildCriminal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'idnum',
        'Address',
        
    ]; 

    public function registeruser()
    {
        return $this->belongsTo(registeruser::class, 'idnum', 'idno');
    }

    
    
}
