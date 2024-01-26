
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

<script nonce="616dbb18-219e-47e9-b1be-61446bb6a536">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);
</script>

<style type="text/css">
	[aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
		display: none;
	}
</style>
</head>

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
<br/>
<section class="content">
<div class="card" style="height: auto">
<br/>
<h1 class="card-title" style="text-align:center; font-size:2rem"> Biodata Siswa </h1>
<div class="box1" style="width:150px; height:200px; margin:2rem 0rem 0rem 12%; background:red">
<?php  
$a   = $edit_staff->id_staff;
$con = mysqli_connect("localhost","root", "", "siakad-web");
$res = mysqli_query($con,"select * from data_staff where id_staff='$a'");
$row = mysqli_fetch_array($res);
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['foto'] ).'" style="width: 150px; height:200px"/>'
?>
  <button type="button" class="btn btn-block btn-default btn-sm" onclick="">Ganti Foto</button>
</div>
<div class="box2" style="margin:-12.5rem 0rem 4rem 28%; height:auto">
<form action="/datastaff/{{ $edit_staff->id_staff }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div id="accordion" style="width:85%">
	<div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu1" aria-expanded="false" aria-controls="menu1">
				<span class="collapsed"><i class="fa fa-plus"></i></span> 
				<span class="expanded"><i class="fa fa-minus"></i></span> 
				Informasi Pribadi Staff
			</a>
		</div>
		<div id="menu1" class="expand">
		<div class="card-body">
<table border="1" cellpadding="5" style="border-color:white">
    <tr>
      <td style="width:14rem"> Nama </td>
      <td> : </td>
      <td style="width:20rem">
        <div class="form-group">
    <input type="text" class="form-control" id="nama_staff" name="nama_staff" value="{{ $edit_staff->nama }}" placeholder="{{ $edit_staff->nama }}">
    </div>
        </td>
    </tr>
    <tr>
      <td> NIP </td>
      <td> : </td>
      <td>
        <input type="text" class="form-control" id="nip_staff" name="nip_staff" value="{{ $edit_staff->nip }}" placeholder="{{ $edit_staff->nip }}">
      </td>
    </tr>

    <tr>
      <td> Bidang </td>
      <td> : </td>
      <td>
    <select type="text" class="form-control" id="bidang_staff" name="bidang_staff" value="{{ $edit_staff->bidang }}">
    @foreach ($staff as $item) 
        <option value="{{ $item->bidang }}" selected hidden>{{ $edit_staff->bidang }}</option>
        <option value="{{ $item->bidang }}">{{ $item->bidang }}</option>
    @endforeach
    </select>
        </td> 
    </tr>

  <tr>    
    <td> NUPTK </td>
    <td> : </td>
    <td>  
        <input type="text" class="form-control" id="nuptk_staff" name="nuptk_staff" value="{{ $edit_staff->nuptk }}" placeholder="{{ $edit_staff->nuptk }}">
    </td>
  </tr>
  
    <tr>  
      <td> Jenis Kelamin </td>
      <td> : </td>
      <td> 
    <select type="option" class="form-control" id="jk_staff" name="jk_staff" placeholder="">
	<option selected hidden value="{{ $edit_staff->jenis_kelamin }}">
        <?php 
      $jk=($edit_staff->jenis_kelamin); 
      if ( $jk == "L") {
        echo "Laki-laki";
      } elseif ($jk == "P") {
        echo "Perempuan";
      }else {
        echo "";
      }
      ?>
    </option>
    <option value="L">Laki-Laki</option>
	<option value="P">Perempuan</option>	
    </select>
      </td>
    </tr>
      
    <tr>  
      <td> Jabatan </td>
      <td> : </td>
      <td>
        <input type="text" class="form-control" id="jabatan_staff" name="jabatan_staff" placeholder="{{ $edit_staff->jabatan }}" value="{{ $edit_staff->jabatan }}">
    </td>
    </tr>
    
    <tr>  
      <td> Tempat Lahir </td>
      <td> : </td>
      <td>
        <input type="text" class="form-control" id="tl_staff" name="tl_staff" placeholder="{{ $edit_staff->tempat_lahir }}" value="{{ $edit_staff->tempat_lahir }}">
    </td>
    </tr>

    <tr>  
      <td> Tanggal Lahir </td>
      <td> : </td>
      <td>
        <input type="date" class="form-control" id="tgl_staff" name="tgl_staff" value="{{ $edit_staff->tanggal_lahir }}" data-date-format="DD MMMM YYYY">    
    </td>
    </tr>
    
    <tr>  
      <td> Nama Ibu </td>
      <td> : </td>
      <td> 
        <input type="text" class="form-control" id="nibu_staff" name="nibu_staff" placeholder="{{ $edit_staff->nama_ibu}} " value="{{ $edit_staff->nama_ibu }} ">    
    </td>
    </tr>

  </table>
		</div>
		</div>
  </div>

	<div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu2" aria-expanded="false" aria-controls="menu2">
				<span class="collapsed"><i class="fa fa-plus"></i></span> 
				<span class="expanded"><i class="fa fa-minus"></i></span> 
				SK Calon Pegawai
			</a>
		</div>
		<div id="menu2" class="collapse">
		<div class="card-body">
<table border="1" cellpadding="5" style="border-color:white">

    <tr>  
      <td style="width:14rem"> Golongan </td>
      <td> : </td>
      <td style="width:20rem">  
        <input type="text" class="form-control" id="gc_staff" name="gc_staff" placeholder="{{ $edit_staff->golongan_capeg }}  " value="{{ $edit_staff->golongan_capeg }}  ">
    </td>
    </tr>

    <tr>  
      <td> Terhitung Mulai Tanggal </td>
      <td> : </td>
      <td>
        <input type="date" class="form-control" id="tmtc_staff" name="tmtc_staff" value="{{ $edit_staff->tmt_capeg }}" data-date-format="DD MMMM YYYY">    
    </td>
    </tr>

  </table>
  </div>
  </div>
  </div>
  
	<div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menu3">
				<span class="collapsed"><i class="fa fa-plus"></i></span> 
				<span class="expanded"><i class="fa fa-minus"></i></span> 
				SK Terakhir
			</a>
		</div>
		<div id="menu3" class="collapse">
		<div class="card-body">
<table border="1" cellpadding="5" style="border-color:white">

    <tr>  
      <td style="width:14rem"> Golongan </td>
      <td> : </td>
      <td style="width:20rem">  
        <input type="text" class="form-control" id="gt_staff" name="gt_staff" placeholder="{{ $edit_staff->golongan_akhir }}  " value="{{ $edit_staff->golongan_akhir }}  ">
    </td>
    </tr>

    <tr>  
      <td> Masa Kerja </td>
      <td> : </td>
      <td>  
        <input type="text" class="form-control" id="mkt_staff" name="mkt_staff" placeholder="{{ $edit_staff->masa_kerjath }} ( Tahun )" value="{{ $edit_staff->masa_kerjath }}" style="width:45%">
        <input type="text" class="form-control" id="mkb_staff" name="mkb_staff" placeholder="{{ $edit_staff->masa_kerjabln }} ( Bulan )" value="{{ $edit_staff->masa_kerjabln }}" style="width:45%;margin:-38px 0rem 0rem 55%"> 
    </td>
    </tr>

    <tr>  
      <td> Terhitung Mulai Tanggal </td>
      <td> : </td>
      <td>
        <input type="date" class="form-control" id="tmta_staff" name="tmta_staff" value="{{ $edit_staff->tmt_akhir }}" data-date-format="DD MMMM YYYY">    
    </td>
    </tr>

    <tr>  
      <td> Mulai Bertugas di Sekolah </td>
      <td> : </td>
      <td>
        <input type="date" class="form-control" id="mb_staff" name="mb_staff" value="{{ $edit_staff->mulai_tugas }}" data-date-format="DD MMMM YYYY">    
    </td>
    </tr>

  </table>
  </div>
  </div>
  </div>

	<div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu4" aria-expanded="false" aria-controls="menu4">
				<span class="collapsed"><i class="fa fa-plus"></i></span> 
				<span class="expanded"><i class="fa fa-minus"></i></span> 
				Riwayat Pendidikan
			</a>
		</div>
		<div id="menu4" class="collapse">
		<div class="card-body">
<table border="1" cellpadding="5" style="border-color:white">
    <tr>  
      <td style="width:14rem"> Pendidikan Terakhir </td>
      <td> : </td>
      <td style="width:20rem">
        <input type="text" class="form-control" id="ti_staff" name="ti_staff" placeholder="{{ $edit_staff->tingkat_ijazah }}" value="{{ $edit_staff->tingkat_ijazah }}">    
    </td>
    </tr>
    
    <tr>  
      <td> Jurusan Perkuliahan </td>
      <td> : </td>
      <td>  
        <input type="text" class="form-control" id="jp_staff" name="jp_staff" placeholder="{{ $edit_staff->jurusan_kuliah }}" value="{{ $edit_staff->jurusan_kuliah }}">    
    </td>
    </tr>
    
    <tr>  
      <td> Tahun Tamat </td>
      <td> : </td>
      <td> 
        <input type="text" class="form-control" id="tt_staff" name="tt_staff" placeholder="{{ $edit_staff->tahun_tamat }}" value="{{ $edit_staff->tahun_tamat }}">    
    </td>
    </tr>
</table>
  </div>
  </div>
  </div>
    
    <div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu5" aria-expanded="false" aria-controls="menu5">
				<span class="collapsed"><i class="fa fa-plus"></i></span> 
				<span class="expanded"><i class="fa fa-minus"></i></span> 
				Lainnya
			</a>
		</div>
		<div id="menu5" class="collapse">
		<div class="card-body">
<table border="1" cellpadding="5" style="border-color:white">
    <tr>  
      <td style="width:14rem"> Posisi di Sekolah </td>
      <td> : </td>
      <td style="width:20rem">
        <input type="text" class="form-control" id="ket_staff" name="ket_staff" placeholder="{{ $edit_staff->keterangan }}" value="{{ $edit_staff->keterangan }}">        
    </td>
    </tr>

  </table>
  </div></div></div></div>
  <button type="submit" class="btn btn-block btn-default" style="width: 30%">Simpan</button>
</form>
  </div>

  

</div>
</div>
</section>
<footer class="main-footer">
<strong>Sistem Informasi Akademik SMK Negeri 1 Sijunjung</strong>
<div class="float-right d-none d-sm-inline-block">
<b> © UPGRISBA</b>
</div>
</footer>
</div>



<script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<! Data Table > 
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
<script>
  $(function () {
    $('#datastaff').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
