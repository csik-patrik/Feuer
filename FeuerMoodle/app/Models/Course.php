<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = true;
    protected $primaryKey = 'course_id';
    protected $fillable = [
        'code',
        'name',
        'category_id',
        'owner_id'
    ];
    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    use HasFactory;
}
