@extends('layout.main')

@section('content')

<br/>
<section class="content">
<div class="card" style="height: auto">
<h1 class="card-title" style="text-align:center; font-size:2rem"> Data Siswa Kelas {{ $tampilan_kelas->nama_kelas }} </h1>

<div class="box1" style="height:auto">
  <table border="1" cellpadding="5" style="border-color:white; margin:5% 0% 0% 5%;">
      <tr>
        <td> Wali Kelas </td>
        <td> : </td>
        <td>
        @foreach ($wali_kelas as $item)
        @foreach ($item->walikelas as $item2)
            {{ $item2->nama }}
        @endforeach
        @endforeach
        </td>
      </tr>
  </table>
  </div>



<table border="1" cellpadding="5" style="width: 90%; margin: 10px 0px 50px 50px;">
<thead>
<tr style="text-align: center">
  <td style="width: 5%">No</td>
  <td style="width: 10%">NIS</td>  
  <td style="width: 20%">NISN</td>
  <td style="width: 45%">Nama Siswa</td>
  <td style="width: 15%"> Jenis Kelamin</td>
</tr> 
</thead>
<tbody>
    <?php $no=0; ?>
    @foreach ($wali_kelas as $item)
    @foreach ($item->siswa->sortBy('nama') as $item2)
    <tr >
            <td style="text-align: center"><?php $no++; echo $no ?></td>
            <td>{{ $item2->nis }}</td>
            <td>{{ $item2->nisn }}</td>
            <td>{{ $item2->nama }}</td>
            <td>
                <?php 
             $jk=($item2->jenis_kelamin); 
             if ( $jk == "L") {
                echo "Laki-laki";
            } elseif ($jk == "P") {
                echo "Perempuan";
            }else {
                 echo "";
            }
                ?>    
            </td>
            </tr>
    @endforeach
    @endforeach

</tbody>
</table>
</div>
</section>
<footer class="main-footer">
<strong>Sistem Informasi Akademik SMK Negeri 1 Sijunjung</strong>
<div class="float-right d-none d-sm-inline-block">
<b> © UPGRISBA</b>
</div>
</footer>
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
    $('#datasiswa').DataTable({
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
<script type="text/javascript">
    var usedNames = {};
    $("select[name='semester'] > option").each(function () {
    if(usedNames[this.text]) {
        $(this).remove();
    } else {
        usedNames[this.text] = this.value;
    }
  });
</script>

<script type="text/javascript">
var usedNames = {};
$("select[name='kelas_siswa'] > option").each(function () {
    if(usedNames[this.text]) {
        $(this).remove();
    } else {
        usedNames[this.text] = this.value;
    }
});
</script>

</body>
</html>
