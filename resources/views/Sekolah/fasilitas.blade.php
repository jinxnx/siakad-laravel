@extends('layout.main')

@section('content')

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
  <h3 class="card-title">Data Fasilitas SMK Negeri 1 Sijunjung</h3>
  </div>
  
  <div class="card-body">
  <div id="datafasilitas_wrapper" class="dataTables_wrapper dt-bootstrap4">
  <div class="row">
  <div class="col-sm-12 col-md-6">
    <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#input_fasilitas" style="width: 30%">Tambah Data Baru</button>  
    @include('Modal.create_fasilitas')
  </div>
  <div class="col-sm-12 col-md-6">
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
  <table id="datafasilitas" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="datafasilitas_info">
  <thead>
  <tr>
  <th class="sorting" tabindex="0" aria-controls="datafasilitas" rowspan="1" colspan="1" aria-label="" width="5%">No</th>
  <th class="sorting" tabindex="0" aria-controls="datafasilitas" rowspan="1" colspan="1" aria-label=""  width="40%">Jenis Sarana dan Prasarana</th>
  <th class="sorting" tabindex="0" aria-controls="datafasilitas" rowspan="1" colspan="1" aria-label=""  width="20%">Tanggal Diterima</th>
  <th class="sorting" tabindex="0" aria-controls="datafasilitas" rowspan="1" colspan="1" aria-label=""  width="20%">Jumlah</th>
  <th class="sorting" tabindex="0" aria-controls="datafasilitas" rowspan="1" colspan="1" aria-label=""  width="15%"></th>
  </tr>
  </thead>
  
  <tbody>
  <?php $no=0; ?>
  @foreach ($data_fasilitas as $item)
  <tr class="odd">
  <td class="dtr-control sorting_1" tabindex="0" data-toggle="modal" data-target="#show_fasilitas{{ $item->id_fasilitas }}"><?php $no++; echo $no ?></td>
  <td style="" data-toggle="modal" data-target="#show_fasilitas{{ $item->id_fasilitas }}">{{ $item['jenis_sarpras'] }}</td>
  <td style="" data-toggle="modal" data-target="#show_fasilitas{{ $item->id_fasilitas }}">{{ \Carbon\Carbon::parse($item->tgl_diterima)->format('d-m-Y') }}</td>
  <td style="" data-toggle="modal" data-target="#show_fasilitas{{ $item->id_fasilitas }}">{{ $item['jml_fasilitas'] }}</td>
  <td>

    <style>
      .container{
        text-align: center;
      }
    
      #button1, #button2{
        display: inline-block;
      }
    </style>

  <div class="container">

  <button type="button1" class="btn btn-secondary" data-toggle="modal" data-target="#edit_modal{{ $item->id_fasilitas }}">  
  <svg width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
  </svg>
  </button>
  @include('Sekolah.editfasilitas')

  <form id="button2" action="{{ route('fasilitas.destroy', $item->id_fasilitas) }}" method="POST">
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-secondary" > 
  <svg width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
  </svg>
  </button>
  </form>
  </div>

  @include('Modal.show_fasilitas')

  </tr>
  @endforeach
  </tbody>
  
  </table>
  </div>
  </div>
  </section>
  
  </div>

<script>
    $(function () {
      $('#datafasilitas').DataTable({
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

<script src="{{ asset('template') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('template') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('template') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('template') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="{{ asset('template') }}/plugins/chart.js/Chart.min.js"></script>
<script src="{{ asset('template') }}/dist/js/pages/dashboard2.js"></script>