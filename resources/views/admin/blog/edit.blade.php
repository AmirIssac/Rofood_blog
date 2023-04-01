@extends('layout.dashboard_main')
@section('content')


<!-- Edit Blog FORM -->
<form action="" method="POST" enctype="multipart/form-data" class="form">
    @csrf
    <div class="formHeader row">
        <h2 class="text-1 fl">المقال {{$blog->title}}</h2>
        <div class="fr">
            <button type="submit" class="btnSave bg-1 text-fff text-bold fr">Update</button>
        </div>
    </div>
    <div class="formBody row">
        <div class="column s-6">
            <label class="inputGroup">
                <span>Title</span>
                <span><input type="text" name="title" value="{{$blog->title}}"></span>
            </label>
            <label class="inputGroup">
                <span>Code</span>
                <span><input type="text" name="code" value="{{$blog->code}}"></span>
            </label>

        </div>
        <div class="column s-6">
            <label class="inputGroup">
                <span>Category</span>
                <span>
                    <select name="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $blog->category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>

                </span>
            </label>
            {{--
            <label class="inputGroup hide">
                <span>Brand</span>
                <span>
                    <input type="text" name="cate">
                    <select name="brand">
                        <option value="cate01">Brand01</option>
                        <option value="cate02">Brand02</option>
                    </select>
                </span>
            </label>
            --}}
            <label class="inputGroup">
                <span>Edit image</span>
                <span>
                    <input type="file" name="image">
                </span>
                <img src="{{asset('public/storage/'.$blog->image)}}" height="150px;">
                {{--
                <input type="hidden" name="img" value="src">
                <span>
                    <input type="file" name="img" onchange="getImg(this)" multiple>
                    <img src="http://bookstore.crunchpress.com/wp-content/uploads/2013/05/b2.jpg" alt="" width="50">
                </span>
                --}}
            </label>
            <label class="inputGroup">
                <span>Active</span>
                <span>
                <input type="hidden" class="status" name="active" value="0">
                @if($blog->active)
                        <input type="checkbox" class="btnSwitch status" name="active" value="1"  checked>
                        @else
                        <input type="checkbox" class="btnSwitch status" name="active" value="1">
                @endif
                </span>
            </label>
        </div>
      <div class="column">
          <label class="inputGroup">
              <span>Content</span>
              <textarea name="paragraph">{{$blog->paragraph}}</textarea>
          </label>
      </div>
    </div>
</form>

<!-- Sub Blogs -->
@if($blog->subBlogs->count() > 0)  {{-- there are subBlogs --}}
@foreach($blog->subBlogs as $subBlog)
    <form action="" method="GET" name="listForm" class="form scrollX">
        <div class="formHeader row">
            <h2 class="text-1 fl"> عنوان فرعي {{ $loop->iteration }}</h2>
            <h2 class="text-1 fl"> {{$subBlog->title}}</h2>
            <div class="fr">

            </div>
        </div>
        <div class="table">
            <div class="row bg-1">
                <div class="cell cell-50 text-center text-fff">ID</div>
                <div class="cell cell-100p text-fff">TITLE</div>
                <div class="cell cell-100 text-center text-fff">EDIT</div>
            </div>
        <!--   BEGIN LOOP -->
            <ul>
                    <li class="row">
                        <div class="cell cell-50 text-center">{{$subBlog->id}}</div>
                        <div class="cell cell-100p"><a href="">{{$subBlog->title}}</a></div>
                        <div class="cell cell-100 text-center">
                            <a href="" class="btnEdit bg-1 text-fff">Edit</a><a href="" style="margin-top: 10px;" class="btnRemove bg-1 text-fff" onclick='return confirm("Do you really want to remove it ?")'>Remove</a>
                        </div>
                    </li>
            </ul>
        <!--   END LOOP -->
        </div>
    </form>
@endforeach
@else {{-- No SubBlogs Found --}}
<div class="formHeader row">
    <h1 style="color: rgb(153, 7, 7)" class="text-1 fl">لا يوجد عناوين فرعية للمقال</h1>
</div>
@endif

<!-- Add Sub Blog -->
<form action="{{route('sub.blog.store',$blog->id)}}" method="POST" enctype="multipart/form-data" class="form">
    @csrf
    <div class="formHeader row">
        <h2 class="text-1 fl">اضافة عنوان فرعي للمقال</h2>
        <div class="fr">
            <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
        </div>
    </div>
    <div class="formBody row">
        <div class="column s-6">
            <label class="inputGroup">
                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                <span>Title</span>
                <span><input type="text" name="title"></span>
            </label>

        </div>
        <div class="column s-6">
            <label class="inputGroup">
                <span>Image</span>
                <span>
                    <input type="file" name="image">
                </span>
                {{--
                <input type="hidden" name="img" value="src">
                <span>
                    <input type="file" name="img" onchange="getImg(this)" multiple>
                    <img src="http://bookstore.crunchpress.com/wp-content/uploads/2013/05/b2.jpg" alt="" width="50">
                </span>
                --}}
            </label>
        </div>
      <div class="column">
          <label class="inputGroup">
              <span>Paragraph</span>
              <textarea name="paragraph"></textarea>
          </label>
      </div>
    </div>
</form>


@endsection
