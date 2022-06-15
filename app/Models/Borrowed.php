<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowed extends Model
{
    //use HasFactory;

    protected $fillable = ['books_id', 'users_id', 'borrowed_at', 'return_by'];
}
