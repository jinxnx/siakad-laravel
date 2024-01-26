@extends('layout.main')

@section('content')

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Data Nilai Siswa SMK Negeri 1 Sijunjung</h3>
</div>

<div class="card-body">
<div id="nilaisiswa_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
<div class="col-sm-12 col-md-6">  
</div>
<div class="col-sm-12 col-md-6">
</div>
</div>
<div class="row">
<div class="col-sm-12">
<table id="nilaisiswa" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="nilaisiswa_info">
<thead>
<tr>
<th class="sorting" tabindex="0" aria-controls="nilaisiswa" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" width="5%">No</th>
<th class="sorting" tabindex="0" aria-controls="nilaisiswa" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="" width="40%">Nama</th>
<th class="sorting" tabindex="0" aria-controls="nilaisiswa" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="" width="20%">NIS</th>
<th class="sorting" tabindex="0" aria-controls="nilaisiswa" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="" width="10%">Kelas</th>
<th class="sorting" tabindex="0" aria-controls="nilaisiswa" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="" width="25%"></th>
</tr>
</thead>

<tbody>
  <?php $no=0; ?>  
@foreach ($nilai_siswa as $item)
<tr class="odd">
<td class="dtr-control sorting_1" tabindex="0"><?php $no++; echo $no ?></td>
<td style="">{{ $item['nama'] }}</td>
<td style="">{{ $item['nisn'] }}</td>
@if (is_null($item['kelas_id']))
<td> </td>
@else
<td style="">{{ $item->kelas['nama_kelas'] }}</td>
@endif
<td>
  <button type="button" class="btn btn-block btn-default btn-sm" onclick="window.location.href='{{ route('tampilan_nilai', $item->id_siswa) }}'">Tampilkan Nilai</button>
</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</div>
</section>
    
<script>
  $(function () {
    $('#nilaisiswa').DataTable({
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
