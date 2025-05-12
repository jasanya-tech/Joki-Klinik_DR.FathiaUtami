<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'category';
    protected $guarded = ['id'];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_category', 'category_id', 'blog_id');
    }
}
