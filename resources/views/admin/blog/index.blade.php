@extends('layout.dashboard_main')
@section('content')

<form action="{{route('category.store')}}" method="POST" name="listForm" class="form scrollX">
    @csrf
    <div class="formHeader row">
        <h2 class="text-1 fl">Categories</h2>
        {{--
        <div class="fr">
          <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
        </div>
        --}}
    </div>
    <div class="table">
        <div class="row bg-1">
            <div class="cell cell-50 text-center text-fff">ID</div>
            <div class="cell cell-100 text-center text-fff">NAME</div>
        </div>
    <!--   BEGIN LOOP -->
        <ul>
            @foreach($categories as $category)
                <li class="row">
                    <div class="cell cell-50 text-center">{{$category->id}}</div>
                    <div class="cell cell-100 text-center">{{$category->name}}</div>

                    {{--
                    <div class="cell cell-100 text-center">
                        <a href="{{route('blog.edit',$blog->id)}}" class="btnEdit bg-1 text-fff">Edit</a><a href="" style="margin-top: 10px;" class="btnRemove bg-1 text-fff" onclick='return confirm("Do you really want to remove it ?")'>Remove</a>
                    </div>
                    --}}
                </li>
            @endforeach
            <li>
                <input type="text" name="name" class="form-control" placeholder="category name">
                <button type="submit" class="btnSave bg-1 text-fff text-bold">CREATE</button>
            </li>
        </ul>
    <!--   END LOOP -->
    </div>
</form>


<form action="" method="GET" name="listForm" class="form scrollX">
    <div class="formHeader row">
        <h2 class="text-1 fl"> المقالات</h2>
        <div class="fr">
          <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
        </div>
    </div>
    <div class="table">
        <div class="row bg-1">
            <div class="cell cell-50 text-center text-fff">ID</div>
            <div class="cell cell-100 text-center text-fff">CATEGORY</div>
            <div class="cell cell-100p text-fff">TITLE</div>

            <div class="cell cell-100 text-center text-fff">EDIT</div>
        </div>
    <!--   BEGIN LOOP -->
        <ul>
            @foreach($blogs as $blog)
                <li class="row">
                    <div class="cell cell-50 text-center">{{$blog->id}}</div>
                    <div class="cell cell-100 text-center">{{$blog->category->name}}</div>
                    <div class="cell cell-100p"><a href="">{{$blog->title}}</a></div>
                    <div class="cell cell-100 text-center">
                        @if($blog->active)
                        <input type="checkbox" class="btnSwitch status" name="status" checked disabled>
                        @else
                        <input type="checkbox" class="btnSwitch status" name="status" disabled>
                        @endif
                    </div>
                    <div class="cell cell-100 text-center">
                        <a href="{{route('blog.edit',$blog->id)}}" class="btnEdit bg-1 text-fff">Edit</a><a href="" style="margin-top: 10px;" class="btnRemove bg-1 text-fff" onclick='return confirm("Do you really want to remove it ?")'>Remove</a>
                    </div>
                </li>
            @endforeach
        </ul>
    <!--   END LOOP -->
    </div>
</form>

{{$blogs->links()}}




<!--    END LOOP -->
    </div>
</form>

<!-- DETAIL FORM -->
<form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data" class="form">
    @csrf
    <div class="formHeader row">
        <h2 class="text-1 fl">إضافة مقال</h2>
        <div class="fr">
            <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
        </div>
    </div>
    <div class="formBody row">
        <div class="column s-6">
            <label class="inputGroup">
                <span>Title</span>
                <span><input type="text" name="title"></span>
            </label>
            <label class="inputGroup">
                <span>Code</span>
                <span><input type="text" name="code"></span>
            </label>

        </div>
        <div class="column s-6">
            <label class="inputGroup">
                <span>Category</span>
                <span>
                    <select name="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
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
            <label class="inputGroup">
                <span>Active</span>
                <span>
                <input type="hidden" class="status" name="active" value="0">
                <input type="checkbox" class="btnSwitch status" name="active" value="1">
                </span>
            </label>
        </div>
      <div class="column">
          <label class="inputGroup">
              <span>Content</span>
              <textarea name="paragraph"></textarea>
          </label>
      </div>
    </div>
</form>

@endsection
