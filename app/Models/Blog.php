<?php

namespace App\Models;

use App\Traits\AuditedBySoftDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, Notifiable, AuditedBySoftDelete, SoftDeletes;
    protected $table = 'blog';
    protected $guarded = ['id'];

    public function categori()
    {
        return $this->belongsToMany(Categori::class, 'blog_categoris', 'blogs_id', 'categoris_id');
    }

    // Change from categori() to categoris()
    public function categoris()
    {
        return $this->belongsToMany(Categori::class, 'blog_categoris', 'blogs_id', 'categoris_id');
    }
}
