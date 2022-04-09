<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'course_id',
        'is_accepted'
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User','user_id');
    }

    public function course()
    {
        return $this->hasOne('App\Models\Course','course_id');
    }
}
