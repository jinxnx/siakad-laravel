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
<link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css?v=3.2.0">
<link rel="stylesheet" href="{{ asset('template') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('template') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('template') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<script nonce="616dbb18-219e-47e9-b1be-61446bb6a536">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script>
<style type="text/css">
	[aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
        display: none;
	}
</style>
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
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
<a class="nav-link"  href="{{ route('logout') }}" role="button"> 
<i class="fas fa-sign-out-alt"></i>
</li>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a class="brand-link">
<img src="{{ asset('template') }}/dist/img/logoSMK.png" style="height: 30px; width: 30px; margin: 0% 5% 0% 25%"></i>
<span class="brand-text font-weight-light">SIAKAD</span>
</a>

<div class="sidebar">
<div class="user-panel mt-3 pb-0 mb-3 d-flex" style="justify-content: center ">
<div class="image" style="padding: 4px 0px 0px 5px ">
    
    <?php
$id = Auth::User()->user_id;
if ($id == 0){
        $foto = "images/default-pic.jpg";
    }else{
        $user_ava =Auth::User()->users->where('nis', $id)->first();
        $base64_img = $user_ava->foto;
        $img = base64_encode($base64_img);
        $foto= "data:image/jpeg;base64, $img";
    }
    ?>
    <img src="{{ $foto }}" class="img-circle elevation-2" alt="User Image" style="width: 3rem; height:3rem">
</div>
<div class="info">

    <?php
$id = Auth::User()->user_id;
if (  $id == 0){    
    $nama="Administrator";
}else{
    $nama= Auth::User()->users->nama;
}
    ?>
<a class="d-block font-weight-light" href="/profile" style="">{{ $nama }}</a>
<p style="color: white"> ({{ Auth::User()->roles->role }}) </p>
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
<a href="/datasiswa" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Data Siswa</p>
</a>
</li>
<li class="nav-item">
<a href="/nilaisiswa" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Nilai Siswa</p>
</a>
</li>
</ul>
</li>


<li class="nav-item menu-close">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-chalkboard-teacher"></i>
<p>
Dashboard Guru
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/dataguru" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Data Guru</p>
</a>
</li>
</ul>
</li>


<li class="nav-item menu-close">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-school"></i>
<p>
Data Sekolah
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/identitas" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Identitas Sekolah</p>
</a>
</li>
<li class="nav-item">
<a href="/fasilitas" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fasilitas Sekolah</p>
</a>
</li>
<li class="nav-item">
<a href="/staff" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Data Staff Sekolah</p>
</a>
</li>
<li class="nav-item">
<a href="/kelas" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Data Kelas</p>
</a>
</li>

<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Kesiswaan</p>
</a>
</li>
</ul>
</li>

<li class="nav-item menu-close">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-book-reader"></i>
<p>
Data Kurikulum
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Kurikulum</p>
</a>
</li>
<li class="nav-item">
<a href="/mapel" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Mata Pelajaran</p>
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
<a href="/dataprestasi" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Daftar Prestasi</p>
</a>
</li>
</ul>
</li>

<li class="nav-item menu-close">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-solid fa-user"></i>
<p>
Data Pengguna
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/datapengguna" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Kelola Data Pengguna</p>
</a>
</li>
</ul>
</li>

<li class="nav-item menu-close">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-bullhorn"></i>
<p>
Informasi
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pengumuman</p>
</a>
</li>
</ul>
</li>

</ul>
</nav>

</div>

</aside>

<main>
<div class="content-wrapper" style="min-height: auto;">
@yield('content')
</div>
</main>

<footer class="main-footer">
<strong>Sistem Informasi Akademik SMK Negeri 1 Sijunjung</a></strong>
<div class="float-right d-none d-sm-inline-block">
<b> &copy; UPGRISBA</b>
</div>
</footer>
</div>


<script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
 
<script src="{{ asset('template') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="{{ asset('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('template') }}/dist/js/adminlte.js?v=3.2.0"></script>
<script src="{{ asset('template') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('template') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('template') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('template') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="{{ asset('template') }}/plugins/chart.js/Chart.min.js"></script>
<script src="{{ asset('template') }}/dist/js/pages/dashboard2.js"></script>

@include('sweetalert::alert')
</body>
</html>
