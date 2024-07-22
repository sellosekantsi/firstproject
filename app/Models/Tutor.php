<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutor';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'dob',
        'phone',
    ];
    use HasFactory;
}
