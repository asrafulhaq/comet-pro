<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    
    /**
     * Show all tags 
     */
    public function index()
    {
        $tags = Tag::latest() -> get();
        $type = 'add';
        return view('admin.post.tag.index', compact('tags', 'type'));
    }

    /**
     * Store tag 
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name'      => 'required'
        ]);


        Tag::create([
            'name'      => $request -> name, 
            'slug'      => Str::slug($request -> name)
        ]);

        return back() -> with('success', 'tag added successfuly');


    }

}
