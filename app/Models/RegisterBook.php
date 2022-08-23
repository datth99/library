<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterBook extends Model
{
    protected $table = 'register_book';

    protected $fillable = [
        'book_id',
        'student_id',
        'time_start', 
        'time_end',
        'status'
    ];
}
