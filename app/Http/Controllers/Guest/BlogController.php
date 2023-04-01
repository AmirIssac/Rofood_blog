<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(){
        $blogs = Blog::where('active',1)->paginate(6);
        return view('guest.blog',['blogs' => $blogs]);
    }

    public function blogDetails($id){
        $blog = Blog::find($id);
        $related_blogs = Blog::whereHas('category', function($q) use ($blog){
            $q->where('id',  $blog->category->id); })
            ->where('id' , '!=' , $blog->id)->where('active' , 1)->get();
        return view('guest.blog_details',['blog' => $blog , 'related_blogs' => $related_blogs]);
    }
}
