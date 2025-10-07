<?php

namespace App\Models;

use App\Models\intern;
use App\Models\visitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class activity extends Model
{
    /** @use HasFactory<\Database\Factories\ActivityFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function visitor()
    {
        return $this->belongsTo(visitor::class, 'visitor_id', 'id');
    }
    public function intern()
    {
        return $this->belongsTo(intern::class, 'intern_id', 'id');
    }
}
