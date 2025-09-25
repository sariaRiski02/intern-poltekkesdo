<?php

namespace App\Models;


use App\Models\department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class requirment extends Model
{
    /** @use HasFactory<\Database\Factories\RequirmentFactory> */
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function department()
    {
        return $this->belongsTo(department::class, 'department_id', 'id');
    }
}
