<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'address_id'
    ];
    protected $casts = [
        'date_of_birth' => 'date'
    ];
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
