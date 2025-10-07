<?php

namespace App\Models;

use App\Models\intern;
use App\Models\department;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class docs extends Model
{
    /** @use HasFactory<\Database\Factories\DocsFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'date_start' => 'date',
        'date_end' => 'date',
    ];

    public function getStatusAttribute($value)
    {
        $statusMap = [
            'pending' => 'pending',
            'rejected' => 'ditolak',
            'accepted' => 'diterima',
            'completed' => 'selesai',
        ];

        return $statusMap[$value] ?? Str::lower($value);
    }

    public function setStatusAttribute($value)
    {
        $reverseStatusMap = [
            'pending' => 'pending',
            'ditolak' => 'rejected',
            'diterima' => 'accepted',
            'selesai' => 'completed',
        ];

        $this->attributes['status'] = $reverseStatusMap[$value] ?? $value;
    }
    public function intern()
    {
        return $this->belongsTo(intern::class, 'intern_id', 'id');
    }
    public function department()
    {
        return $this->belongsTo(department::class, 'department_id', 'id');
    }
}
