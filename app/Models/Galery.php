<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galery extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'galery';
    protected $guarded = ['id'];
    protected $casts = [
        'images' => 'array',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
