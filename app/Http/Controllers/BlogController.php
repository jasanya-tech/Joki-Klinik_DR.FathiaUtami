<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // Ambil nilai pencarian dari request, jika ada
        $search = $request->query('search');

        // Mulai query untuk model Doctor
        $blogs = Blog::with(['categoris', 'status']);

        // Jika ada nilai pencarian, tambahkan kondisi WHERE
        if ($search) {
            $blogs->where('title', 'LIKE', '%' . $search . '%');
        }

        if( $request->has('category_id')) {
            $categoryId = $request->input('category_id');
            $blogs->whereHas('categoris', function ($query) use ($categoryId) {
                $query->where('id', $categoryId);
            });
        }

        // Terapkan paginasi pada hasil query
        $blogs = $blogs->paginate(10); // Sesuaikan jumlah item per halaman sesuai kebutuhan Anda


        $recentBlogs = Blog::with(['categoris', 'status'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    
            $categories = Category::all();
        // Kembalikan view dengan data dokter dan nilai pencarian (untuk mengisi kembali input search)
        return view('user.blog.index', compact('blogs', 'search', 'recentBlogs', 'categories'));
    }
}
