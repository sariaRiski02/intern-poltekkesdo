<?php

namespace App\Models;

use App\Models\docs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'head_desc',
        'slug',
        'desc',
        'admin_id'
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
}
