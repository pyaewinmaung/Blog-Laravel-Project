<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">
<link rel="icon" href="./images/icon/usability.png">
<title>CoolAdmin</title>

<link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

<link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

<link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}}" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
<meta name="robots" content="index, nofollow">
<body class="animsition">
<div class="page-wrapper">

<header class="header-mobile d-block d-lg-none">
<div class="header-mobile__bar">
<div class="container-fluid">
<div class="header-mobile-inner">
<a class="logo" href="index.html">
<img src="{{asset('images/icon/logo.png')}}" alt="CoolAdmin" />
</a>
<button class="hamburger hamburger--slider" type="button">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
</div>
<nav class="navbar-mobile">
<div class="container-fluid">
<ul class="navbar-mobile__list list-unstyled">
<li class="has-sub">
<a class="js-arrow" href="#">
<i class="fas fa-tachometer-alt"></i>Dashboard</a>
<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
<li>
<a href="{{route('home')}}">Dashboard 1</a>
</li>
</ul>
</li>
<li>
<a href="{{route('chart')}}">
<i class="fas fa-chart-bar"></i>Charts</a>
</li>
<li>
<a href="{{route('table')}}">
<i class="fas fa-table"></i>Tables</a>
</li>
<li>
<a href="{{route('form')}}">
<i class="far fa-check-square"></i>Forms</a>
</li>
<li>
<a href="{{route('blog.index')}}">
<i class="fa-solid fa-blog"></i>Blogs</a>
</li>
<li>
<a href="{{route('post.index')}}">
<i class="fa-solid fa-photo-film"></i>Posts</a>
</li>
<li>
<a href="{{route('state')}}">
<i class="fa-solid fa-tree-city"></i>States</a>
</li>
<li>
<a href="{{route('township')}}">
<i class="fa-solid fa-mountain-city"></i>Townships</a>
</li>

</ul>
</div>
</nav>
</header>


<aside class="menu-sidebar d-none d-lg-block">
<div class="logo">
<a href="#">
<img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
</a>
</div>
<div class="menu-sidebar__content js-scrollbar1">
<nav class="navbar-sidebar">
<ul class="list-unstyled navbar__list">
<li class="active has-sub">
<a class="js-arrow" href="#">
<i class="fas fa-tachometer-alt"></i>Dashboard</a>
<ul class="list-unstyled navbar__sub-list js-sub-list">
<li>
<a href="{{route('home')}}">Dashboard 1</a>
</li>
<li>
</ul>
</li>
<li>
<a href="{{route('chart')}}">
<i class="fas fa-chart-bar"></i>Charts</a>
</li>
<li>
<a href="{{route('table')}}">
<i class="fas fa-table"></i>Tables</a>
</li>
<li>
<a href="{{route('form')}}">
<i class="far fa-check-square"></i>Forms</a>
</li>
<li>
<a href="{{route('blog.index')}}">
<i class="fa-solid fa-blog"></i>Blogs</a>
</li>
<li>
<a href="{{route('post.index')}}">
<i class="fa-solid fa-photo-film"></i>Posts</a>
</li>
<li>
<a href="{{route('state')}}">
<i class="fa-solid fa-tree-city"></i>States</a>
</li>
<li>
<a href="{{route('township')}}">
<i class="fa-solid fa-mountain-city"></i>Townships</a>
</li>


</ul>
</nav>
</div>
</aside>


<div class="page-container">

<header class="header-desktop">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="header-wrap">
<form class="form-header" action method="POST">
<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
<button class="au-btn--submit" type="submit">
<i class="zmdi zmdi-search"></i>
</button>
</form>
<div class="header-button">
<div class="noti-wrap">
<div class="noti__item js-item-menu">
<i class="zmdi zmdi-comment-more"></i>
<span class="quantity">1</span>
<div class="mess-dropdown js-dropdown">
<div class="mess__title">
<p>You have 2 news message</p>
</div>
<div class="mess__item">
<div class="image img-cir img-40">
<img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
</div>
<div class="content">
<h6>Michelle Moreno</h6>
<p>Have sent a photo</p>
<span class="time">3 min ago</span>
</div>
</div>
<div class="mess__item">
<div class="image img-cir img-40">
<img src="{{asset('images/icon/avatar-04.jpg')}}" alt="Diane Myers" />
</div>
<div class="content">
<h6>Diane Myers</h6>
<p>You are now connected on message</p>
<span class="time">Yesterday</span>
</div>
</div>
<div class="mess__footer">
<a href="#">View all messages</a>
</div>
</div>
</div>
<div class="noti__item js-item-menu">
<i class="zmdi zmdi-email"></i>
<span class="quantity">1</span>
<div class="email-dropdown js-dropdown">
<div class="email__title">
<p>You have 3 New Emails</p>
</div>
<div class="email__item">
<div class="image img-cir img-40">
<img src="{{asset('images/icon/avatar-06.jpg')}}" alt="Cynthia Harvey" />
</div>
<div class="content">
<p>Meeting about new dashboard...</p>
<span>Cynthia Harvey, 3 min ago</span>
</div>
</div>
<div class="email__item">
<div class="image img-cir img-40">
<img src="{{asset('images/icon/avatar-05.jpg')}}" alt="Cynthia Harvey" />
</div>
<div class="content">
<p>Meeting about new dashboard...</p>
<span>Cynthia Harvey, Yesterday</span>
</div>
</div>
<div class="email__item">
<div class="image img-cir img-40">
<img src="{{asset('images/icon/avatar-04.jpg')}}" alt="Cynthia Harvey" />
</div>
<div class="content">
<p>Meeting about new dashboard...</p>
<span>Cynthia Harvey, April 12,,2018</span>
</div>
</div>
<div class="email__footer">
<a href="#">See all emails</a>
</div>
</div>
</div>
<div class="noti__item js-item-menu">
<i class="zmdi zmdi-notifications"></i>
<span class="quantity">3</span>
<div class="notifi-dropdown js-dropdown">
<div class="notifi__title">
<p>You have 3 Notifications</p>
</div>
<div class="notifi__item">
<div class="bg-c1 img-cir img-40">
<i class="zmdi zmdi-email-open"></i>
</div>
<div class="content">
<p>You got a email notification</p>
<span class="date">April 12, 2018 06:50</span>
</div>
</div>
<div class="notifi__item">
<div class="bg-c2 img-cir img-40">
<i class="zmdi zmdi-account-box"></i>
</div>
<div class="content">
<p>Your account has been blocked</p>
<span class="date">April 12, 2018 06:50</span>
</div>
</div>
<div class="notifi__item">
<div class="bg-c3 img-cir img-40">
<i class="zmdi zmdi-file-text"></i>
</div>
<div class="content">
<p>You got a new file</p>
<span class="date">April 12, 2018 06:50</span>
</div>
</div>
<div class="notifi__footer">
<a href="#">All notifications</a>
</div>
</div>
</div>
</div>
<div class="account-wrap">
<div class="account-item clearfix js-item-menu">
<div class="image">
<img src="{{asset('images/icon/avatar-01.jpg')}}" alt="John Doe" />
</div>
<div class="content">
<a class="js-acc-btn" href="#"> {{Auth::user()->name}}</a>
</div>
<div class="account-dropdown js-dropdown">
<div class="info clearfix">
<div class="image">
<a href="#">
<img src="{{asset('images/icon/avatar-01.jpg')}}" alt="John Doe" />
</a>
</div>
<div class="content">
<h5 class="name">
<a href="#">{{Auth::user()->name}}</a>
</h5>
<span class="email">{{Auth::user()->email}}</span>
</div>
</div>
<div class="account-dropdown__body">
<div class="account-dropdown__item">
<a href="#">
<i class="zmdi zmdi-account"></i>Account</a>
</div>
<div class="account-dropdown__item">
<a href="#">
<i class="zmdi zmdi-settings"></i>Setting</a>
</div>
<div class="account-dropdown__item">
<a href="#">
<i class="zmdi zmdi-money-box"></i>Billing</a>
</div>
</div>
<div class="account-dropdown__footer">
    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>


<div class="main-content">
 @yield('content')
</div>

</div>
</div>

<script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

<script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
<script src="{{asset('vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
<script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
<script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('vendor/select2/select2.min.js')}}">
    </script>

<script src="{{asset('js/main.js')}}"></script>
<script defer src="{{asset('https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317')}}" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"834327170c0889a6","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>