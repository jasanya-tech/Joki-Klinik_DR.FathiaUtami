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

    public function getValueAttribute($value)
    {
        switch ($this->type) {
            case 'Textarea':
                return ['Textarea' => $value];
            case 'RichEditor':
                return ['RichEditor' => $value];
            case 'UploadImage':
                return ['UploadImage' => $value];
            default:
                return $value;
        }
    }
}
