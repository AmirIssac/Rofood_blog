<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رفود| لوحة التحكم</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700&family=Poppins:wght@500&family=Roboto&display=swap" rel="stylesheet">
    @yield('link')

</head>
<body>
    <div class="container">
        <!--     SIDE AREA -->
            <div class="sideArea">
                <div class="avatar">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCNOdyoIXDDBztO_GC8MFLmG_p6lZ2lTDh1ZnxSDawl1TZY_Zw" alt="">
                    <div dir="rtl" class="avatarName">مرحبا,<br>أدمن </div>
                </div>
                <ul class="sideMenu">
                    <li><a href="{{route('dashboard')}}" class="has-submenu"></span>لوحة التحكم</a>
                    </li>
                    <li><a href="{{route('d.blogs')}}" class="has-submenu"></span>المقالات</a>
                    </li>
                    <li><a href="{{route('d.packages')}}" class="has-submenu"></span>الباقات</a>
                    </li>
                    <li><a href="javascript:void(0)" class="has-submenu"></span>تقييمات العملاء</a>
                    </li>
                </ul>
            </div>
        <!--     SIDE AREA -->
            <div class="mainArea">
                <!-- BEGIN NAV -->
                <nav class="navTop row">
                    <div class="menuIcon fl"><span class="fa-solid fa-bars-staggered">
                        <a href="/">Home</a>
                    </span></div>
                    <div class="account fr">
                        <div class="name has-submenu">أدمن </div>
                        <ul class="accountLinks submenu">
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger">خروج </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- END NAV -->
                <!-- CONTAINER  -->
                <div class="mainContent">
        <!-- LIST FORM -->
        <div class="row filterGroup">
            <form action="" method="POST" class="formSearch fl">
                <input type="text" class="inputSearch" placeholder="Search">
                <button type="submit" class="btnSearch"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="areaFilter fr row">
                <div class="boxSelect fr">
                    <div class="titleSelect">Sort by</div>
                    <ul class="optionSelect">
                        <li sortIndex="0"><a href="">Alphabet</a></li>
                        <li sortIndex="1"><a href="">Price, Ascending</a></li>
                        <li sortIndex="2"><a href="">Price, Descending</a></li>
                        <li sortIndex="3"><a href="">Latest</a></li>
                    </ul>
                </div>
        <!--         FILTER -->
                <div class="btnFilter fr bg-fff"><span class="fa fa-filter"></span>Filter</div>
                <div class="boxFilter">
                    <div class="btnFilter"><span class="fa fa-close"></span>Close</div>
        <!--             GROUP -->
                    <div class="groupInput">
                        <select name="">
                            <option value="">Brand</option>
                            <option value="">Brand 01</option>
                            <option value="">Brand 02</option>
                        </select>
                        <select name="">
                            <option value="">Category</option>
                            <option value="">Category 01</option>
                            <option value="">Category 02</option>
                        </select>
                        <select name="">
                            <option value="">Author</option>
                            <option value="">Author 01</option>
                            <option value="">Author 02</option>
                        </select>
                    </div>
        <!--             END GROUP -->
        <!--             GROUP -->
                    <div class="groupInput">
                        <p class="titleInput">Price</p>
                        <div id="filterPrice"></div>
                        <div class="areaValue">
                            <p>From</p>
                            <input type="text" class="rangeValue">
                            <p>To</p>
                            <input type="text" class="rangeValue">
                        </div>
                    </div>
        <!--             END GROUP -->
                </div>
            </div>
        </div>




        @yield('content')




    <script src="{{asset('js/admin.js')}}"></script>
    @yield('script')
</body>
</html>
