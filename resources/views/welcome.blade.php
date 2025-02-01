<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="./assets/css/home.css">
</head>
<body>
<header class="header">
    <a href="" class="logo">nampox</a>
    <nav class="navbar">
        <a href="" class="active">Home</a>
        <a href="">About</a>
        <a href="">Services</a>
        <a href="">Portfolio</a>
        <a href="">Contact</a>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </nav>
</header>
<section class="home">
    <div class="home-content">
        <h1>Hi, tôi là nampox</h1>
        <h3>Php developer</h3>
        <p>Tôi là một lập trình viên PHP với kinh nghiệm trong việc phát triển ứng dụng web. Tôi đam mê công nghệ và
            luôn tìm kiếm cơ hội để hoàn thiện kỹ năng của mình. Với nền tảng vững chắc về các framework như Laravel và
            CodeIgniter, tôi mong muốn đóng góp vào những dự án sáng tạo và đầy thử thách.</p>
        <div class="btn-box">
            <a href="">Hire Me</a>
            <a href="">Let's Talk</a>
        </div>
    </div>
    <div class="home-sci">
        <a href="https://www.facebook.com/nampox2612/"><i class='bx bxl-facebook'></i></a>
        <a href="https://www.youtube.com/@nampox3618"><i class='bx bxl-youtube'></i></a>
        <a href=""><i class='bx bxl-instagram'></i></a>
    </div>
</section>
</body>
</html>
