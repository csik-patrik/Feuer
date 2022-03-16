<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'course_id',
        'code',
        'name',
        'category_id',
        'owner_id'
    ];
    use HasFactory;
}
