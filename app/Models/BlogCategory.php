<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategory extends Model
{
    use HasFactory;
    protected $table = 'blog_category';

     // Nonaktifkan timestamps
    public $timestamps = false;

     // Nonaktifkan fitur primary key karena tabel tidak punya primary key
    protected $primaryKey = null;
    public $incrementing = false;
    
      // Menambahkan properti fillable
    protected $fillable = [
        'blogs_id',
        'categoris_id',
    ];
    
    public function categori(): BelongsTo
    {
        return $this->belongsTo(Categori::class, 'categoris_id');
    }

    public function Blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class, 'blogs_id');
    }
}
