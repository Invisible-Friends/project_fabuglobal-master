<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class CourseController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
        ->approved()
        ->withCount('comments')->paginate(10);

        $recent_posts = Post::latest()->take(5)->get();

        $categories = Category::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();



        return view('blog', [
            'posts' => $posts,
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            
        ]);
    }
}
