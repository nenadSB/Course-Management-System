<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    // An enrollment belongs to a user (trainee)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // An enrollment belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}