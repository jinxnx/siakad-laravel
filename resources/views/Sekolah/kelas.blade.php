@extends('layout.main')

@section('content')

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
<h3 class="card-title">Data Kelas di SMK Negeri 1 Sijunjung</h3>
</div>

<div class="card-body">
<div id="datakelas_wrapper" class="dataTables_wrapper dt-bootstrap4">
  <div class="row"><div class="col-sm-12 col-md-6"></div>
  <div class="col-sm-12 col-md-6"></div>
  </div>
  <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#inputmodal-default" style="width: 15%">Tambah Data Baru</button></div>
  <div class="row"><div class="col-sm-12">
  <table id="datakelas" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="datakelas_info">
<thead>
<tr>
<th class="sorting" tabindex="0" aria-controls="datakelas" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="">No</th>
<th class="sorting" tabindex="0" aria-controls="datakelas" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="">Kelas(s)</th>
<th class="sorting" tabindex="0" aria-controls="datakelas" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Wali Kelas</th>
<th class="sorting" tabindex="0" aria-controls="datakelas" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="">Jumlah Siswa</th>
<th class="sorting" tabindex="0" aria-controls="datakelas" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style=""></th>
</tr>
</thead>
<tbody>
  <?php $no=0; ?>
@foreach ($data_kelas as $item)
<tr class="odd">
<td class="dtr-control sorting_1" tabindex="0"><?php $no++; echo $no ?></td>
<td style="">{{ $item['nama_kelas'] }}</td>
<td style="">
@foreach ($item->walikelas as $item2)
{{ $item2->nama }}
@endforeach
</td>
<td style="">{{ $item->siswa->count('pivot.id_kelas')}}</td>
<td>
<button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('tampilan_kelas', $item->id_kelas) }}'">
<svg width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
</svg>
</button>

<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editmodal-sm{{ $item->id_kelas }}">
<svg width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
</svg>
</button>

<form action="{{ route('kelas.destroy', $item->id_kelas) }}" method="POST" style="margin:-30px 0px 0px 91px">
	@csrf
	@method('delete')
<button type="submit" class="btn btn-secondary" onclick="return confirm('Anda Yakin Ingin Menghapus Data ?')">
<svg width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
</svg>
</button>
@include('Sekolah.editkelas')
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

<div class="modal fade" id="inputmodal-default" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-default">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Tambahkan Kelas Baru</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<form action="{{ route('kelas.store') }}" method="POST" enctype="multipart/form-data"> 
	@csrf
<div class="form-group">
<label for="nama_kelas">Kelas</label>
<input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="">
</div>

<div class="form-group">
<label for="wali_kelas">Wali Kelas</label>
<select class="form-control" id="wali_kelas" name="wali_kelas" placeholder="">
@foreach ($wakel as $item) 
  <option value="{{ $item->id_guru }}">{{ $item->nama }}</option>
@endforeach
</select>
</div>

<div class="modal-footer justify-content-between">
<button type="submit" name="submit_kelas" class="btn btn-primary" style="margin-left:380px">Simpan</button>
</div>
</form>
</div>

</div>
</div>

@endsection


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

<script>
  $(function () {
    $('#datakelas').DataTable({
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
</body>
</html>
