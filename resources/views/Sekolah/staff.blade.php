
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
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Data Staff SMK Negeri 1 Sijunjung</h3>
</div>

<div class="card-body">
<div id="datastaff_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
<div class="col-sm-12 col-md-6">  
<button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#inputmodal-lg" style="width: 30%">Tambah Data Baru</button>
</div>
<div class="col-sm-12 col-md-6">
</div>
</div>

<div class="row">
<div class="col-sm-12">
<table id="datastaff" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="datastaff_info">
<thead>
<tr>
<th class="sorting" tabindex="0" aria-controls="datastaff" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" width="5%">No</th>
<th class="sorting" tabindex="0" aria-controls="datastaff" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="">Nama</th>
<th class="sorting" tabindex="0" aria-controls="datastaff" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="" width="20%">NIP</th>
<th class="sorting" tabindex="0" aria-controls="datastaff" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="" width="15%">Bidang</th>
<th class="sorting" tabindex="0" aria-controls="datastaff" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="" width="25%"></th>
</tr>
</thead>

<tbody>
	<?php $no=0; ?>
@foreach ($data_staff as $item)
<tr class="odd">
<td class="dtr-control sorting_1" tabindex="0"><?php $no++; echo $no ?></td>
<td style="">{{ $item['nama'] }}</td>
<td style="">{{ $item['nip'] }}</td>
<td style="">{{ $item['bidang'] }}</td>
<td>
<button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('tampilan_staff', $item->id_staff) }}'">
<svg width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
</svg>
</button>
<button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('edit_staff', $item->id_staff) }}'">
<svg width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
</svg>
</button>
<form action="{{ route('staff.destroy', $item->id_staff) }}" method="POST" style="margin:-38px 0px 0px 90px" onclick="return confirm('Anda Yakin Ingin Menghapus Data ?')">
	@csrf
	@method('delete')
<button type="submit" class="btn btn-secondary"> 
<svg width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
</svg>
</button>
</form>
</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</div>
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

<div class="modal fade" id="inputmodal-lg" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Input Data staff</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">

<form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data"> 
	@csrf
<div class="box1" style="width:150px; height:200px; margin:2rem 0rem 0rem 1rem;">
<img style="width: 150px; height:200px" id="foto_staff" name="foto_staff" />
<div class="form-group">
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" id="inputfoto_staff" name="inputfoto_staff" onchange="PreviewImage();" required oninvalid="this.setCustomValidity('Silahkan Pilih Foto Terlebih Dahulu')" oninput="this.setCustomValidity('')">
<label class="custom-file-label" for="inputfoto_staff"></label>
</div></div></div>

<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("inputfoto_staff").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("foto_staff").src = oFREvent.target.result;
};
};
</script>

</div>

<div class="box2" style="margin:-12.5rem 0rem 4rem 12rem; width:35rem; height:auto">
<div id="accordion">
<div class="card">
<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu1" aria-expanded="false" aria-controls="menu1">
				<span class="collapsed"><i class=""></i></span> 
				<span class="expanded"><i class=""></i></span> 
				Informasi Pribadi Staff
			</a>
		</div>

<div id="menu1" class="expand">
<div class="card-body">

<div class="form-group">
<label for="nama_staff">Nama</label>
<input type="text" class="form-control" id="nama_staff" name="nama_staff" placeholder="">
</div>

<div class="form-group">
<label for="nip_staff">NIP</label>
<input type="text" class="form-control" id="nip_staff" name="nip_staff" placeholder="">
</div>

<div class="form-group">
<label for="bidang_staff">Bidang</label>
<input type="text" class="form-control" id="bidang_staff" name="bidang_staff" placeholder="">
</div>

<div class="form-group">
<label for="nuptk_staff">NUPTK</label>
<input type="text" class="form-control" id="nuptk_staff" name="nuptk_staff" placeholder="">
</div>

<div class="form-group">
<label for="jk_staff">Jenis Kelamin</label>
<input type="text" class="form-control" id="jk_staff" name="jk_staff" placeholder="">
</div>

<div class="form-group">
<label for="jabatan_staff">Jabatan</label>
<input type="text" class="form-control" id="jabatan_staff" name="jabatan_staff" placeholder="">
</div>

<div class="form-group">
<label for="tmpl_staff">Tempat Lahir</label>
<input type="text" class="form-control" id="tmpl_staff" name="tmpl_staff" placeholder="">
</div>

<div class="form-group">
<label for="tgl_staff">Tanggal Lahir</label>
<input type="date" class="form-control" id="tgl_staff" name="tgl_staff" placeholder="">
</div>

<div class="form-group">
<label for="nibu_staff">Nama Ibu</label>
<input type="text" class="form-control" id="nibu_staff" name="nibu_staff" placeholder="">
</div>

</div></div></div>

<div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu2" aria-expanded="false" aria-controls="menu2">
				<span class="collapsed"><i class=""></i></span> 
				<span class="expanded"><i class=""></i></span> 
				SK Calon Pegawai
			</a>
		</div>
<div id="menu2" class="collapse">
<div class="card-body">

<div class="form-group">
<label for="golcapeg_staff">Golongan</label>
<input type="text" class="form-control" id="golcapeg_staff" name="golcapeg_staff" placeholder="">
</div>

<div class="form-group">
<label for="tmtcapeg_staff">Terhitung Mulai Tanggal</label>
<input type="date" class="form-control" id="tmtcapeg_staff" name="tmtcapeg_staff" placeholder="">
</div>

</div></div></div>

<div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menu3">
				<span class="collapsed"><i class=""></i></span> 
				<span class="expanded"><i class=""></i></span> 
				SK Terakhir
			</a>
		</div>
<div id="menu3" class="collapse">
<div class="card-body">

<div class="form-group">
<label for="golakhir_staff">Golongan</label>
<input type="text" class="form-control" id="golakhir_staff" name="golakhir_staff" placeholder="">
</div>

<div class="form-group">
<label for="tmtakhir_staff">Terhitung Mulai Tanggal</label>
<input type="date" class="form-control" id="tmtakhir_staff" name="tmtakhir_staff" placeholder="">
</div>

<div class="form-group">
<label for="mk_staff">Masa Kerja</label>
<input type="text" class="form-control" id="mkt_staff" name="mkt_staff" placeholder="Tahun" style="width:45%">
<input type="text" class="form-control" id="mkb_staff" name="mkb_staff" placeholder="Bulan" style="width:45%;margin:-38px 0rem 0rem 55%">
</div>

<div class="form-group">
<label for="mb_staff">Mulai Bertugas di Sekolah Ini</label>
<input type="date" class="form-control" id="mb_staff" name="mb_staff" placeholder="">
</div>

</div></div></div>

<div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu4" aria-expanded="false" aria-controls="menu4">
				<span class="collapsed"><i class=""></i></span> 
				<span class="expanded"><i class=""></i></span> 
				Riwayat Pendidikan
			</a>
		</div>
<div id="menu4" class="collapse">
<div class="card-body">

<div class="form-group">
<label for="pa_staff">Pendidikan Terakhir</label>
<input type="text" class="form-control" id="pa_staff" name="pa_staff" placeholder="">
</div>

<div class="form-group">
<label for="jp_staff">Jurusan Perkuliahan</label>
<input type="text" class="form-control" id="jp_staff" name="jp_staff" placeholder="">
</div>

<div class="form-group">
<label for="tt_staff">Tahun Tamat</label>
<input type="text" class="form-control" id="tt_staff" name="tt_staff" placeholder="">
</div>

</div></div></div>

<div class="card">
	<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#menu5" aria-expanded="false" aria-controls="menu5">
				<span class="collapsed"><i class=""></i></span> 
				<span class="expanded"><i class=""></i></span> 
				Lainnya
			</a>
		</div>
<div id="menu5" class="collapse">
<div class="card-body">

<div class="form-group">
<label for="ps_staff">Posisi di Sekolah</label>
<input type="text" class="form-control" id="ps_staff" name="ps_staff" placeholder="">
</div>

</div></div></div>
</div>


</div>

</div>
<div class="modal-footer justify-content-between">
<button type="submit" class="btn btn-primary" style="margin-left:680px">Simpan</button>
</div>
</form>
</div>

</div>

</div>


<script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('template') }}/dist/js/adminlte.js?v=3.2.0"></script>
// Data Table 
<script src="{{ asset('template') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@include('sweetalert::alert')
</body>
</html>
