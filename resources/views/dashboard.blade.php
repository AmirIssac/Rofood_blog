@extends('layout.dashboard_main')
@section('link')
<style>
    .card{
        padding: 50px;
        background-color: #001bb7;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid #fff;
        border-radius: 10px;
        min-width: 300px;
    }
</style>
@endsection
@section('content')

<form action="" method="GET" name="listForm" class="form scrollX">
    <div class="formHeader row">
        <h2 class="text-1 fl"> لوحة التحكم</h2>
        <div class="fr">
          <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button><a href="" class="btnAdd fa fa-plus bg-1 text-fff"></a>
        </div>
    </div>

</form>

<div style="display: flex; justify-content: space-evenly; margin-top: 100px;">
<div class="card">
    <h3>المقالات</h3>
    <h3 style="margin-top:15px;"> {{$blogs_count}} </h3>
</div>

<div class="card">
    <h3>الباقات</h3>
    <h3 style="margin-top:15px;"> {{$packages_count}} </h3>
</div>
</div>


@endsection

@section('script')
@endsection
