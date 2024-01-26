
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi Akademik SMK Negeri 1 Sijunjung</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="{{ asset('template') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="616dbb18-219e-47e9-b1be-61446bb6a536">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-dark">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="/home" class="nav-link">Beranda</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link"  href="{{ route('logout') }}" role="button">
<i class="fas fa-sign-out-alt"></i>
</li>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a class="brand-link">
<img src="{{ asset('template') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
@if (auth()->user()->level=="admin")
<span class="brand-text font-weight-light">
Administrator
</span>
@elseif (auth()->user()->level=="siswa")
<span class="brand-text font-weight-light">
Siswa
</span>
@elseif (auth()->user()->level=="Guru")
<span class="brand-text font-weight-light">
Guru
</span>
@endif
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{ asset('template') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a class="d-block">{{ auth()->user()->name }}</a>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-close">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-user-graduate"></i>
<p>
Dashboard Siswa
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Data Siswa</p>
</a>
</li>

<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Nilai Siswa</p>
</a>
</li>

<li class="nav-item">
<a href="/jadwal_pelajaran" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Jadwal Pelajaran</p>
</a>
</li>

</ul>
</li>


<li class="nav-item menu-close">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-medal"></i>
<p>
Data Prestasi 
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p> Prestasi Siswa </p>
</a>
</li>
</ul>
</li>

<li class="nav-item">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-bullhorn"></i>
<p>
Pengumuman
</p>
</a>
</li>

</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Selamat Datang {{ auth()->user()->name }},</h1>
</div>
</div>
</div>
</div>


<section class="content">
Test testt content di sini
</section>

</div>


<aside class="control-sidebar control-sidebar-dark">

</aside>


<footer class="main-footer">
<strong>Sistem Informasi Akademik SMK Negeri 1 Sijunjung</a></strong>
<div class="float-right d-none d-sm-inline-block">
<b> &copy; UPGRISBA</b>
</div>
</footer>
</div>



<script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>

<script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="{{ asset('template') }}/dist/js/adminlte.js?v=3.2.0"></script>


<script src="{{ asset('template') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('template') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('template') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('template') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>

<script src="{{ asset('template') }}/plugins/chart.js/Chart.min.js"></script>

<script src="{{ asset('template') }}/dist/js/pages/dashboard2.js"></script>
</body>
</html>
