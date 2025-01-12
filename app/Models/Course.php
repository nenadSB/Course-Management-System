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
        'trainer_id',
    ];

    // A course belongs to a trainer (user)
    public function trainer()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }

    // A course can have many enrollments
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}