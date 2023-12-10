<?php

// app/Models/NoticeAndGazette.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeAndGazette extends Model
{
    use HasFactory;

    protected $fillable = ['notice', 'gazette'];
}
