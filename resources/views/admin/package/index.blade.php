@extends('layout.dashboard_main')
@section('content')
<form action="" method="GET" name="listForm" class="form scrollX">
    <div class="formHeader row">
        <h2 class="text-1 fl"> الباقات</h2>
        <div class="fr">
          <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
        </div>
    </div>
    <div class="table">
        <div class="row bg-1">
            <div class="cell cell-50 text-center text-fff">ID</div>
            <div class="cell cell-100 text-center text-fff">NAME</div>
            <div class="cell cell-100 text-center text-fff">EDIT</div>
        </div>
    <!--   BEGIN LOOP -->
        <ul>
            @foreach($packages as $package)
                <li class="row">
                    <div class="cell cell-50 text-center">{{$package->id}}</div>
                    <div class="cell cell-100 text-center">{{$package->name}}</div>
                    <div class="cell cell-100 text-center">
                        <a href="{{route('package.edit',$package->id)}}" class="btnEdit bg-1 text-fff">Edit</a><a href="" style="margin-top: 10px;" class="btnRemove bg-1 text-fff" onclick='return confirm("Do you really want to remove it ?")'>Remove</a>
                    </div>
                </li>
            @endforeach
        </ul>
    <!--   END LOOP -->
    </div>
</form>





<!--    END LOOP -->
    </div>
</form>

<!-- DETAIL FORM -->
<form action="{{route('package.store')}}" method="POST" class="form">
    @csrf
    <div class="formHeader row">
        <h2 class="text-1 fl">إضافة باقة</h2>
        <div class="fr">
            <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
        </div>
    </div>
    <div class="formBody row">
        <div class="column s-6">
            <label class="inputGroup">
                <span>Name</span>
                <span><input type="text" name="name"></span>
            </label>
        </div>
        <div class="column s-6">




        </div>
      <div class="column">

      </div>
    </div>
</form>

@endsection
