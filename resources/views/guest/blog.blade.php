@extends('layout.main')
@section('link')
<link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
<style>
    .blogs {
        padding: 40px 0;
    }
    .blogs .main-title{
        font-size: 40px;
    }
    @media(max-width: 767px){
        .blogs .main-title{
            font-size: 28px !important;
        }
    }
    .blogs.rtl{
        direction: rtl;
    }
    .blogs.rtl .form-select{
        padding: .375rem .75rem .375rem 2.25rem;
        background-position: left .75rem center;
    }
    .blogs .blog{
        border-radius: 10px;
        box-shadow: 0 0 6px #0d41e1;
        text-align: center;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }
    .blogs .blog img{
        width: 100%;
        border-radius: 10px;
    }
    .blogs .blog .title{
        margin: 15px 0;
        padding: 10px 5px;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    }
    .blog-details-btn{
        text-decoration: none;
        display: block;
        padding: 6px;
        width: 160px;
        text-align: center;
        color: #0d41e1;
        border: 1px solid #0d41e1;
        border-radius: 10px;
        margin: 15px auto;
        transition: all 0.3s;
    }
    .blog-details-btn:hover{
        color: #fff;
        background-color: #0d41e1;
    }
</style>
@endsection
@section('content')
 <!--Content-->
 <div class="Landing">
    <div class="blogs rtl">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h1 class="main-title">مدونة رفود</h1>
                <select style="width: 200px;" name="" id="" class="form-select">
                    <option value="">كل التدوينات</option>
                    <option value="">قسم آخر</option>
                </select>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-sm-6 col-md-4">
                        <div class="blog">
                            <img src="{{asset('storage/'.$blog->image)}}" alt="blog-image">
                            <h5 class="title">{{$blog->title}}</h5>
                            <a href="{{route('blog.details',$blog->id)}}" class="blog-details-btn">ابدأ القراءة</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
