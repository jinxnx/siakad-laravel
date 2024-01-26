
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
<link rel="stylesheet" href="{{ asset('template') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('template') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('template') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('template') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


<script nonce="616dbb18-219e-47e9-b1be-61446bb6a536">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
<a href="" class="brand-link">
<img src="{{ asset('template') }}/dist/img/logoSMK.png" style="height: 30px; width: 30px; margin: 0% 5% 0% 25%"></i>
<span class="brand-text font-weight-light">SIAKAD</span>
</a>

<div class="sidebar">
<div class="user-panel mt-3 pb-3 mb-3 d-flex" style="justify-content: center">
<div class="image">
<img src="{{ asset('template') }}/dist/img/default-pic.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a class="d-block font-weight-light">{{ auth()->user()->name }}</a>
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

@if (auth()->user()->level=="admin")
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
@endif

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
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Daftar Prestasi</p>
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

<div class="content-wrapper" style="min-height: 2905.62px;">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h1 class="card-title">
    <form method="GET">
    <select class="form-control" name="kelas_siswa" id="kelas_siswa" required  style="" onchange="this.form.submit()">
      @foreach ($jadwal_pelajaran as $item)
      @foreach ($item->mapel_kelas as $item2) 
      <option value="" selected hidden disabled>Pilih Kelas</option>
      <option value="{{ $item2->id_kelas}}">{{ $item2->nama_kelas }}</option>
      @endforeach  
      @endforeach
      </select> 
     </form>

</h1>
<button type="button" class="btn btn-secondary" style="float: right;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg>
Tambahkan Jadwal Pelajaran
</button>
<button id="tombolPrint"  class="btn btn-secondary" name="tombolPrint" onclick="printData()" style="float: right; margin-right:1%;"> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
</svg>
    Print Jadwal</button>

</div>

<div class="card-body" id="printAble">
    @foreach ($kelas_nama as $item)
<h1 style="text-align: center"  >Jadwal Pelajaran Kelas {{ $item->nama_kelas }}</h1>
    @endforeach 
<label for="jp_sennin"> Sennin </label>
<table border="1" cellpadding="5" border-color="black" name="jp_sennin" >
    <tr style='text-align: center'>
        <td>No</td>
        <td style="width: 25%;">Jam</td>
        <td style="width: 50%;">Mata Pelajaran</td>
        <td style="width: 50%;">Guru</td>    
    </tr>
    <?php $no=0; ?>
    @foreach ($sennin_jp as $item)
    <tr>
        <td style="text-align: center"><?php $no++; echo $no?></td>
        <td style="text-align: center" data-time-format="hh:mm">{{ $item->jam_mulai}} - {{ $item->jam_habis }}</td>
        @foreach ($item->mapel_jp as $item2)
        <td>{{ $item2->nama_mapel }}</td>
        @endforeach
        @foreach ($item->guru as $item3)
        <td>{{ $item3->nama }}</td>
        @endforeach
    </tr>
    @endforeach
</table>
<br>

<label for="jp_selasa"> Selasa </label>
<table border="1" cellpadding="5" border-color="black" name="jp_selasa">
    <tr style='text-align: center'>
        <td>No</td>
        <td style="width: 25%;">Jam</td>
        <td style="width: 50%;">Mata Pelajaran</td>
        <td style="width: 50%;">Guru</td>    
    </tr>
    <?php $no=0; ?>
    @foreach ($selasa_jp as $item)
    <tr>
        <td style="text-align: center"><?php $no++; echo $no?></td>
        <td style="text-align: center">{{ $item->jam_mulai}} - {{ $item->jam_habis }}</td>
        @foreach ($item->mapel_jp as $item2)
        <td>{{ $item2->nama_mapel }}</td>
        @endforeach
        @foreach ($item->guru as $item3)
        <td>{{ $item3->nama }}</td>
        @endforeach
    </tr>
    @endforeach
</table>
<br>

<label for="jp_rabu"> Rabu </label>
<table border="1" cellpadding="5" border-color="black" name="jp_rabu" >
    <tr style='text-align: center'>
        <td>No</td>
        <td style="width: 25%;">Jam</td>
        <td style="width: 50%;">Mata Pelajaran</td>
        <td style="width: 50%;">Guru</td>     
    </tr>
    <?php $no=0; ?>
    @foreach ($rabu_jp as $item)
    <tr>
        <td style="text-align: center"><?php $no++; echo $no?></td>
        <td style="text-align: center">{{ $item->jam_mulai}} - {{ $item->jam_habis }}</td>
        @foreach ($item->mapel_jp as $item2)
        <td>{{ $item2->nama_mapel }}</td>
        @endforeach
        @foreach ($item->guru as $item3)
        <td>{{ $item3->nama }}</td>
        @endforeach
    </tr>
    @endforeach
</table>
<br>

<label for="jp_kamis"> Kamis </label>
<table border="1" cellpadding="5" border-color="black" name="jp_kamis" >
    <tr style='text-align: center'>
        <td>No</td>
        <td style="width: 25%;">Jam</td>
        <td style="width: 50%;">Mata Pelajaran</td>
        <td style="width: 50%;">Guru</td>     
    </tr>
    <?php $no=0; ?>
    @foreach ($kamis_jp as $item)
    <tr>
        <td style="text-align: center"><?php $no++; echo $no?></td>
        <td style="text-align: center">{{ $item->jam_mulai}} - {{ $item->jam_habis }}</td>
        @foreach ($item->mapel_jp as $item2)
        <td>{{ $item2->nama_mapel }}</td>
        @endforeach
        @foreach ($item->guru as $item3)
        <td>{{ $item3->nama }}</td>
        @endforeach
    </tr>
    @endforeach
</table>
<br>

</p>
<label for="jp_jumat"> Jum'at </label>
<table border="1" cellpadding="5" border-color="black" name="jp_jumat" >
    <tr style='text-align: center'>
        <td>No</td>
        <td style="width: 25%;">Jam</td>
        <td style="width: 50%;">Mata Pelajaran</td>
        <td style="width: 50%;">Guru</td>    
    </tr>
    <?php $no=0; ?>
    @foreach ($jumat_jp as $item)
    <tr>
        <td style="text-align: center"><?php $no++; echo $no?></td>
        <td style="text-align: center">{{ $item->jam_mulai}} - {{ $item->jam_habis }}</td>
        @foreach ($item->mapel_jp as $item2)
        <td>{{ $item2->nama_mapel }}</td>
        @endforeach
        @foreach ($item->guru as $item3)
        <td>{{ $item3->nama }}</td>
        @endforeach
    </tr>
    @endforeach
</table>
<br>

</p>
<label for="jp_sabtu"> Sabtu </label>
<table border="1" cellpadding="5" border-color="black" name="jp_sabtu" >
    <tr style='text-align: center'>
        <td>No</td>
        <td style="width: 25%;">Jam</td>
        <td style="width: 50%;">Mata Pelajaran</td>
        <td style="width: 50%;">Guru</td>     
    </tr>
    <?php $no=0; ?>
    @foreach ($sabtu_jp as $item)
    <tr>
        <td style="text-align: center"><?php $no++; echo $no?></td>
        <td style="text-align: center">{{ $item->jam_mulai}} - {{ $item->jam_habis }}</td>
        @foreach ($item->mapel_jp as $item2)
        <td>{{ $item2->nama_mapel }}</td>
        @endforeach
        @foreach ($item->guru as $item3)
        <td>{{ $item3->nama }}</td>
        @endforeach
    </tr>
    @endforeach
</table>
</div>

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

<script src="{{ asset('template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="{{ asset('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('template') }}/dist/js/adminlte.js?v=3.2.0"></script>
<script src="{{ asset('template') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('template') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('template') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('template') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="{{ asset('template') }}/plugins/chart.js/Chart.min.js"></script>
<script src="{{ asset('template') }}/dist/js/pages/dashboard2.js"></script>

<script type="text/javascript">
    function printData()
{
   var divToPrint=document.getElementById("printAble");
   newWin= window.open("Jadwal Pelajaran");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
    </script>

<script>
    var usedNames = {};
    $("select[name='kelas_siswa'] > option").each(function () {
    if(usedNames[this.text]) {
        $(this).remove();
    } else {
        usedNames[this.text] = this.value;
    }
  });
</script>
@include('sweetalert::alert')
</body>
</html>
