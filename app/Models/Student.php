<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'course_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'address_id'
    ];

    protected $casts = [
        'date_of_birth' => 'date'
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subjects')
                    ->withTimestamps();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
