<?php

namespace App\Models;

use App\Models\docs;
use App\Models\User;
use App\Models\department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class intern extends Model
{
    /** @use HasFactory<\Database\Factories\InternFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function docs()
    {
        return $this->hasMany(docs::class, 'intern_id', 'id');
    }

    // Relationship to department through docs
    public function departments()
    {
        return $this->hasManyThrough(
            department::class,  // Final model
            docs::class,        // Intermediate model
            'intern_id',        // Foreign key on docs table
            'id',               // Foreign key on departments table
            'id',               // Local key on interns table
            'department_id'     // Local key on docs table
        );
    }

    // Helper method to get the first department (since usually one intern applies to one department)
    public function department()
    {
        return $this->hasOneThrough(
            department::class,  // Final model
            docs::class,        // Intermediate model
            'intern_id',        // Foreign key on docs table
            'id',               // Foreign key on departments table
            'id',               // Local key on interns table
            'department_id'     // Local key on docs table
        );
    }
}
