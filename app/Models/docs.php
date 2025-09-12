<?php

namespace App\Models;

use App\Models\intern;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class docs extends Model
{
    /** @use HasFactory<\Database\Factories\DocsFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    public function intern()
    {
        return $this->belongsTo(intern::class, 'intern_id', 'id');
    }
}
