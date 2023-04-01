@extends('layout.main')
@section('link')
<link rel="stylesheet" href="{{asset('public/css/all.min.css')}}" />
<style>
 .blog-details.rtl{
        text-align: right;
        direction: rtl;
       }
       .blog-details .main-title{
        text-align: center;
        margin-bottom: 20px;
       }
       .blog-titles{
        border: 1px solid #ddd;
        padding: 10px;
        margin-top: 15px;
       }
       .blog-titles a{
        display: block;
        text-decoration: none;
        margin-bottom: 10px;
        color: grey;
        padding: 5px;
        border-bottom: 1px solid #eee;
       }
       .blog-titles a:last-child{
        border-bottom: none;
       }
       .blog-titles a:hover{
        color: #000;
       }
       .paragraph{
        box-shadow: 0 0 5px rgba(0, 0, 230, 0.5);
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
       }
       /* related-blog */
       .related-blog{
        position: relative;
        display: block;
        border-radius: 10px;
        text-decoration: none;
        box-shadow: 0 0 5px rgba(0, 0, 230, 0.5);
        overflow: hidden;
        margin-bottom: 15px;
        opacity: 0.8;
        transition: all 0.3s;
       }
       .related-blog .title{
        position: absolute;
        width: 100%;
        min-height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        bottom: -30px;
        background-color: rgba(0, 0, 230, 0.5);
        color: #fff;
        font-size: 24px;
        transition: all 0.3s;
       }
       .related-blog:hover{
        opacity: 1;
       }
       .related-blog:hover .title{
        bottom: 0;
       }
</style>
@endsection
@section('content')
 <!--Content-->
 <div class="blog-details rtl">
    <div class="container">
      <h2 class="main-title">{{$blog->title}}</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="blog-titles">
            <h3>قائمة المحتويات</h3>
            <hr>
            <a href="#">{{$blog->title}}</a>
            @foreach($blog->subBlogs as $subBlog)
            <a href="#">{{$subBlog->title}}</a>
            @endforeach
          </div>
        </div>
        <div class="col-md-6">
          <img src="{{asset('public/storage/'.$blog->image)}}" class="w-100" alt="">
        </div>
        <div class="col-12">
          <div class="paragraph">
            <h5>{{$blog->title}}</h5>
            <hr>
            <p>{{$blog->paragraph}}</p>
          </div>
          @foreach($blog->subBlogs as $subBlog)

          <div class="paragraph">
            <h5>{{$subBlog->title}}</h5>
            <div>
                <img src="{{asset('public/storage/'.$subBlog->image)}}" height="250px;">
            </div>
            <hr>
            <p>{{$subBlog->paragraph}}</p>
          </div>
          @endforeach

        </div>
      </div>

      <div class="related-blogs">
        <h4 class="my-3">تدوينات ذات صلة</h4>
        <div class="row">
        @foreach($related_blogs as $related_blog)
          <div class="col-sm-6 col-md-3">
            <a href="" class="related-blog">
              <img src="{{asset('public/storage/'.$related_blog->image)}}" class="w-100 rounded" alt="">
              <div class="title">{{$related_blog->title}}</div>
            </a>
          </div>
        @endforeach


        </div>
      </div>
    </div>
  </div>
  @endsection
