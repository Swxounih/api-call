<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    
    protected $table = 'students';
    // Columns that are allowed to be saved via POST or PUT
    protected $fillable = [
    'name',
    'email',
    'course',
    ];
}
