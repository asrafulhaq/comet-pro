<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Show all cat
     */
    public function index()
    {

        $all_data = Category::latest() -> get();
        $form_type = 'add';
        return view('admin.post.category.index', compact('all_data','form_type')); 
    }


    /**
     * Store Category 
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name'      => ['required']
        ]);
        

        Category::create([
            'name'      => $request -> name, 
            'slug'      => Str::slug($request -> name)
        ]);

        return back() -> with('success', 'Category added successfuly');


    }

}
