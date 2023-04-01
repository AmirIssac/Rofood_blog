<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function index(){
        $categories = Category::get();
        $blogs = Blog::paginate(8);
        return view('admin.blog.index',['categories' => $categories , 'blogs' => $blogs]);
    }

    public function store(Request $request){

        // Retrieve the uploaded file from the form input
        $file = $request->file('image');

        // Generate a unique filename for the image
        /*
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        */
        // Save the file to the storage disk
        /*
        $path = $file->storeAs('public/',$filename);
        */
        /*
        $file->storeAs('public/',$filename);
        */
        $request->file('image')->store('public/blog');
        $file_name = $request->file('image')->hashName();
        $blog = Blog::create([
            'category_id' => $request->category ,
            'active' => $request->active ,
            'code' => $request->code ,
            'title' => $request->title ,
            'paragraph' => $request->paragraph ,
            'image' => 'blog/'.$file_name
        ]);

        return back();
    }

    public function edit($id){
        $blog = Blog::with('subBlogs')->find($id);
        $categories = Category::get();
        return view('admin.blog.edit',['categories' => $categories , 'blog' => $blog]);
    }

    public function subBlogStore(Request $request){
        // Retrieve the uploaded file from the form input
        $file = $request->file('image');


        $request->file('image')->store('public/subBlog');
        $file_name = $request->file('image')->hashName();
        $subBlog = SubBlog::create([
            'blog_id' => $request->blog_id ,
            'title' => $request->title ,
            'paragraph' => $request->paragraph ,
            'image' => 'subBlog/'.$file_name
        ]);

        return back();
    }
}
