<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'setting';
    protected $guarded = ['id'];

    protected $casts = [
        'value' => 'array',
    ];

    public function setValueAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['value'] = json_encode($value);
        } else {
            $this->attributes['value'] = $value;
        }
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
