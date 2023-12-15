<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogsTimber extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'species',
        'numlogs1',
        'volume1',
        'numlogs2',
        'volume2',
        'sourceoflogs',
        'numlogs3',
        'volume3',
        'numlogs4',
        'volume4'
    ];
}
