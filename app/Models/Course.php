<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'file_source'
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User','user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');

    }
}
