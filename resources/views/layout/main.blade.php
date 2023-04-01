<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rofood</title>
    <!--External Links-->
    <link rel="stylesheet" href="{{asset('public/css/index.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/css/all.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700&family=Poppins:wght@500&family=Roboto&display=swap" rel="stylesheet">
    @yield('link')
</head>
<body>
    <nav>

    <!--Lower Navigation Bar-->
    <div class="lower-nav navbar navbar-expand justify-content-evenly">
        <section class="buttons">
            <button onclick="login()" class="Log-in"> الدخول</button>
            <button onclick="signup()" class="Sign-Up"> حساب تجريبي</button>
            <a href="{{route('login')}}"><button class="Log-in">دخول أدمن</button></a>

        </section>

        <i onclick="mobileNav()" id="barbtn" class="fa-solid fa-bars-staggered"></i>

<ul class="navbar-nav">

    <li class="nav-item"><a href="" class="nav-link">قسم المساعدة</a></li>
    <li class="nav-item"><a href="{{route('packages')}}" class="nav-link">الأسعار</a></li>
    <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">المدونة</a></li>
    <li class="nav-item"><a href="" class="nav-link">كيف تعمل المنصة</a></li>
    <li class="nav-item"><a href="" class="nav-link">المنتجات</a></li>
    <li class="nav-item"><a href="/" class="nav-link">الصفحة الرئيسية</a></li>


</ul>
<!--Mobile Nav-->
<div class="mobile-nav">
    <ul>
        <i style="cursor: pointer;" onclick="closemobileNav()" class="close-nav fa-solid fa-xmark"></i>
    <li>
                    <a href="index.html">الصفحة الرئيسية</a>
                </li>
                <li>
                    <a>المنتجات</a>

                </li>
                <li>
                    <a> كيف تعمل المنصة</a>
                </li>
                <li>
                    <a href="{{route('blog')}}">المدونة</a>
                </li>
                <li>
                    <a href="{{route('packages')}}"> الأسعار  </a>

                </li>

                <li>
                    <a> قسم المساعدة </a>

                </li>

                <section class="buttons2">
                    <button onclick="login()" class="Log-in"> الدخول</button>
                    <button onclick="signup()" class="Sign-Up"> حساب تجريبي</button>
                    <button onclick=" openadmin()" class="Log-in">دخول أدمن</button>
                </section>
    </ul>
</div>

<section class="navbar-brand" >
    <img src="{{asset('public/img/logo.jpeg')}}" alt="" width="100px" style="border-radius: 50%;">
</section>
    </div>
    </nav>

    @yield('content')








<!--Footer-->
<footer class="footer">
    <div class="row top">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                    <div class="content mb-4">
                        <h3>
                            رفود </h3>
                        <a href="/"> الصفحة الرئيسية</a>
                        <a href="{{route('packages')}}l"> الأسعار </a>
                        <a href="{{route('blog')}}">المدونة</a>
                        <a href="#">كيف تعمل المنصة</a>
                        <a href="#"> المنتجات</a>
                        <a href="#">  قسم المساعدة</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6">
                    <div class="content mb-4">
                        <h3>
                             تجربة حساب جديد </h3>
                             <button onclick="signup()" class="Log-in"> حساب جديد</button>

                    </div>
                </div>


            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <img src="{{asset('public/img/logo.jpeg')}}" style="border-radius: 50%; width: 120px;">
        </div>
    </div>


    <div class="bottom row">
        <form>




            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1>تواصل معنا
                </h1>

                <h2 dir="rtl">الرياض - واجهة الرياض,  المملكة العربية السعودية
                </h2>
                <h2>info@rofood.co</h2>

            </div>
        </form>
    </div>

    <div class="copy-right">
        <h2>رفود ©️ 2022. جميع الحقوق محفوظة.</h2>
        <div class="social-media">
            <a href="#"><i onclick="linkedin()" class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i onclick="facebook()" class="fa-brands fa-facebook-square"></i></a>
            <a href="#"><i onclick="twetter()" class="fa-brands fa-twitter-square"></i></a>
            <a href="#"><i onclick="insta()" class="fa-brands fa-instagram-square"></i></a>
        </div>
    </div>
</footer>
<div class="whats">
    <i onclick="whats()"><img src="{{asset('public/img/whatsapp_icon.png')}}" alt="" width="100px"></i>
</div>
    <script src="{{asset('public/js/index.js')}}"></script>

    @yield('script')

</body>
</html>
