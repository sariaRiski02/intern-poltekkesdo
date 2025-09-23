<?php

namespace App\Models;

use App\Models\activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class visitor extends Model
{
    /** @use HasFactory<\Database\Factories\VisitorFactory> */
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function activity()
    {
        return $this->hasMany(activity::class);
    }
}
