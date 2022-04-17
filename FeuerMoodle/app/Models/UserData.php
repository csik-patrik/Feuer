<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_data_id';
    protected $fillable = [
        'email',
        'firstname',
        'midname',
        'lastname',
        'phone'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
