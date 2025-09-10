<?php

namespace App\Models;

use App\Models\admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class desc extends Model
{
    /** @use HasFactory<\Database\Factories\DescFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];


    public function admin()
    {
        return $this->belongsTo(admin::class, 'admin_id', 'id');
    }
}
