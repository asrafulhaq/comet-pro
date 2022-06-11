<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * show all posts 
     */ 
    public function index()
    {
        $all_posts = Post::latest() -> get();
        return view('admin.post.index', [
            'all_data'     => $all_posts,
            'type'      => 'add'
        ]);
    }
    /**
     * Add new post 
     */
    public function create()
    {

        $cats = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', [
            'tags' =>  $tags,
            'cats' =>  $cats ,
        ]);
    }
}
