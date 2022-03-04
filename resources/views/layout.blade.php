<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anasayfa - K-POP Blog</title>
    <!-- Css -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    @yield('head')
    <!-- Tailwind CDN -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">--}}

   {{-- Bootstrap --}}
    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"></head>--}}
</head>
<body>
<div id="wrapper">
<!-- header -->
@yield('header')

<!-- sidebar -->
<div class="sidebar">
   <span class="closeButton">&times;</span>
   <p class="brand-title"><a href="">K-pop Blog</a></p>

   <div class="side-links">
       <ul>
           <li><a class="{{Request::routeIs('welcome.index') ? 'active':''}}" href="{{route('welcome.index')}}">Anasayfa</a></li>
           <li><a class="{{Request::routeIs('blog.index') ? 'active':''}}" href="{{route('blog.index')}}">Blog</a></li>
           <li><a class="{{Request::routeIs('about') ? 'active':''}}" href="{{route('about')}}">Hakkında</a></li>
           <li><a class="{{Request::routeIs('contact.index') ? 'active':''}}" href="{{route('contact.index')}}">İletişim</a></li>
          @guest()<!--Giriş yapınca ekranda gözükmemesini sağlar-->
              <li><a class="{{Request::routeIs('login') ? 'active':''}}" href="{{route('login')}}">Giriş</a></li>
              <li><a class="{{Request::routeIs('register') ? 'active':''}}" href="{{route('register')}}">Üye Ol</a></li>
              @endguest
           @auth()
               <li><a class="{{Request::routeIs('dashboard') ? 'active':''}}" href="{{route('dashboard')}}">Giriş Paneli</a></li>
           @endauth

       </ul>
   </div>

   <!-- sidebar footer -->
   <footer class="sidebar-footer">
       <div>
           <a href=""><i class="fab fa-facebook-f"></i></a>
           <a href=""><i class="fab fa-instagram"></i></a>
           <a href=""><i class="fab fa-twitter"></i></a>
       </div>

       <small>&copy Şeyma Topuz Blog</small>
   </footer>
</div>
<!-- Menu Button -->
<div class="menuButton">
   <div class="bar"></div>
   <div class="bar"></div>
   <div class="bar"></div>
</div>

<!-- main -->
@yield('main')

<!-- Main footer -->
<footer class="main-footer">
   <div>
       <a href=""><i class="fab fa-facebook-f"></i></a>
       <a href=""><i class="fab fa-instagram"></i></a>
       <a href=""><i class="fab fa-twitter"></i></a>
   </div>
   <small>&copy Şeyma Topuz Blog </small>
</footer>
</div>

<!-- Click events to menu and close buttons using javaascript-->
<script>
document
   .querySelector(".menuButton")
   .addEventListener("click", function () {
       document.querySelector(".sidebar").style.width = "100%";
       document.querySelector(".sidebar").style.zIndex = "5";
   });

document
   .querySelector(".closeButton")
   .addEventListener("click", function () {
       document.querySelector(".sidebar").style.width = "0";
   });
</script>

<!-- Cards animations -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
   offset: 400,
   duration: 3000,
});
document
   .querySelectorAll("img")
   .forEach((img) => img.addEventListener("load", () => AOS.refresh()));
</script>
@yield('scripts')
</body>
</html>
