<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Ini adalah kunci yang diminta oleh error tersebut!
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}