<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lecturer extends Model
{
    /** @use HasFactory<\Database\Factories\LecturerFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'nip',
    ];

    // Relasi: 1 dosen punya banyak Student
    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
