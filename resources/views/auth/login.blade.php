<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول أدمن</title>
    <link rel="stylesheet" href="{{asset('public/css/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700&family=Poppins:wght@500&family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <div class="login-box">
        <h2>تسجيل الدخول للأدمن</h2>
        <form method="POST" action="{{ route('login') }}" id="login-form">
            @csrf
          <div class="user-box">
            <input id="email" type="text" name="email" required="">
            <label>الإيميل</label>
          </div>
          <div class="user-box">
            <input id="pass" type="password" name="password" required="">
            <label>كلمة المرور</label>
          </div>
          <a href="javascript:{}" onclick="document.getElementById('login-form').submit();" onclick="check ()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            دخول
          </a>
        </form>
      </div>
    <script src="{{asset('public/js/login.js')}}"></script>
</body>
</html>
