<?php

namespace App\Models;

use App\Models\docs;
use App\Models\admin;
use App\Models\intern;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function requirement()
    {
        return $this->hasMany(requirment::class, 'department_id', 'id');
    }

    public function docs()
    {
        return $this->hasMany(docs::class, 'department_id', 'id');
    }

    public function intern()
    {
        return $this->hasManyThrough(intern::class, docs::class, 'department_id', 'id', 'id', 'intern_id');
    }
    public function admin()
    {
        return $this->belongsTo(admin::class, 'admin_id', 'id');
    }
}
