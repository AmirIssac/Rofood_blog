@extends('layout.main')

@section('content')
<div class="Landing">
    <section style="text-align: center;" class="welcome">
        <div>
<h1 style="font-size: 45px;">
برنامج رفود
</h1>
<p id="element"></p>
<div id="pricebtn">
<a href="{{route('packages')}}"><button class="prices">عرض الأسعار</button></a>
</div>
</div>
<div class="row justify-content-center mt-4">
<img src="{{asset('public/img/img1.png')}}" alt="" class="col col-xl-7">
</div>
    </section>

    <section id="row" class="features row justify-content-center">
        <h2 style="text-align: center; margin-bottom:50px;">
            مميزات رفود
        </h2>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-house"></i>
            <p>مستودع رئيسي</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-store"></i>
            <p>مخزون لكل محل</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-mobile"></i>
            <p>سهولة الوصول من أي مكان</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-key"></i>
            <p>تحديد صلاحيات لكل موظف</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-file"></i>
            <p>وصفات متعددة لكل عميل</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-sharp fa-solid fa-display"></i>
            <p>واجهات سهلة</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-sharp fa-solid fa-code-branch"></i>
            <p>ربط الفروع مع بعضها في شاشة واحدة</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-message"></i>
            <p>ربط مع موزدي خدمة الرسائل</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-store"></i>
            <p>ربط مع متجرك الالكتروني</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-van-shuttle"></i>
            <p>خدمة الطلب من الموردين</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-check"></i>
            <p>موافقة التأمين</p>
        </div>
        <div class="col-5 col-md-4 col-lg-3 col-xl-2">
            <i class="fa-solid fa-check"></i>
            <p>متوافق مع متطلبات هيئة الزكاة والضريبة</p>
        </div>
    </section>

    <div id="row" class="row  justify-content-center mt-5 ">
        <div class="form-info col-11 col-sm-9">
        <h1 class="p-2">إحصل على نسختك التّجريبيّة من    برنامج رفود

        </h1>
        <h2 class="p-2">تزوّد بالأدوات المثاليّة لمشروعٍ ناجح.
        </h2>
        <img src="{{asset('public/img/image.png')}}" alt="" width="300px">
        <button onclick="signup()" class="Sign-Up-ceneter"> حساب تجريبي</button>
    </div>
    </div>


<section style="text-align: center;padding-top: 100px;" class="channels ">
    <i class="fa-solid fa-thumbs-up like"></i>
    <h2>
قنوات الربط
    </h2>
    <div class="container">
    <img src="{{asset('public/img/earth-2.0.png')}}" alt="" width="200px">
    <img src="{{asset('public/img/aven.png')}}" alt="" width="200px">
    <img src="{{asset('public/img/hex-lab.png')}}" alt="" width="200px">
    <img src="{{asset('public/img/lighting.png')}}" alt="" width="200px">
    <img src="{{asset('public/img/ideaa.png')}}" alt="" width="200px">
</div>
</section>


</div>
@endsection
