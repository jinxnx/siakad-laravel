@extends('layout.main')

@section('content')
<br/>
<section class="content">
<div class="card" style="height: auto">
<br/>
<h1 class="card-title" style="text-align:center; font-size:2rem"> Nilai Siswa </h1>
<div class="box_combine" style="display: flex; justify-content: center; margin-top:3%"> 
<div class="box1" style="width:150px; margin-top: 10px">
  <img src="data:image/jpeg;base64, {{ $image }}" style="width: 160px; height:210px"/>
</div>
<div class="box2" style="margin-left:2%; height:auto">
    <table border="1" cellpadding="5" style="border-color:white">
        <tr>
          <td style="width:14rem"> Nama </td>
          <td> : </td>
          <td style="width:20rem">{{ $tampilan_nilai['nama'] }}</td>
        </tr>
        <tr>
          <td> NISN </td>
          <td> : </td>
          <td>{{ $tampilan_nilai['nisn'] }}</td>
        </tr>
  
        <tr>
          <td> NIS </td>
          <td> : </td>
          <td>{{ $tampilan_nilai['nis'] }}</td> 
        </tr>
  
        <form>
      <tr>    
        <td> Kelas </td>
        <td> : </td>
        <td>
          @foreach ($kelas_nama as $item)
          {{ $item['nama_kelas'] }}
          @endforeach
        </td>
      </tr>      
  
      <tr>    
        <td> Semester </td>
        <td> : </td>
        <td>
          {{ $semester_nama }}
          </td>
          </tr>
    
    <tr>
      <td colspan="3">
    <form method="POST">
      <select class="form-control" name="kelas_siswa" id="kelas_siswa" required  style="width: 35%;margin: 0% 0% 0% 0%;">
        @foreach ($data_nilai as $item)
        @foreach ($item->nilai_kelas as $item2) 
        <option value="" selected hidden disabled>Pilih Kelas</option>
        <option value="{{ $item2->id_kelas}}">{{ $item2->nama_kelas }}</option>
        @endforeach  
        @endforeach
        </select> 
        
        <select class="form-control" name="semester" id="semester" required style="width: 35%;margin: -7% 0% 0% 36%;">
    <option value="" selected hidden disabled> Pilih Semester</option>
    <option value="1"> 1 </option>
    <option value="2"> 2 </option>
    </select>
    
    <button type="submit" class="btn btn-block btn-default" style="width: 25%;margin: -7% 0% 0% 75%;"> Lihat </button> </td>
  </td>
    </tr>
    </table>
    </form>   
    </div>
</div>
  
  <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#inputmodal-lg" style="width: 15%;margin: 10px 0px 0px 50px;">Input Nilai</button>
    <table border="1" cellpadding="5" style="width: 90%; margin: 10px 0px 50px 50px;">
    <tr style="text-align: center">
    <td rowspan="2" style="width: 2%">No</td>
    <td rowspan="2" style="width: 30%">Mata Pelajaran</td>  
    <td rowspan="2" style="width: 5%">KKM</td>
    <td colspan="2">Nilai Hasil Belajar</td>
    </tr> 
    <tr style="text-align: center">
    <td style="width: 5%"> Angka</td>
    <td style="width: 5%"> Prediket</td>
    </tr>  
  
    <tr>
  <?php $no=0; ?>  
    @foreach ($kelas_semester as $item)
    @foreach ($item->nilai_mapel as $item2)
  <td style="text-align: center"><?php $no++; echo $no ?></td>
  <td>{{ $item2['nama_mapel'] }}</td>  
  <td style="text-align: center">{{ $item['kkm'] }}</td> 
  <td style="text-align: center">{{ $item['nilai'] }}</td>
  <td> </td> 
  <td style="width: 0%">
  
  <form method="POST" action="{{ route('tampilannilai.destroy', $item->id_nilai) }}">
    @csrf
    @method('delete')
  <button type="submit" class="btn btn-secondary" onclick="return confirm('Anda Yakin Ingin Menghapus Data ?')">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
  </svg>
  </button>
  </form>
    
  </td> 
  </tr>
  @endforeach
  @endforeach
      </table>
  </section>
  
  </div>
  
  <div class="modal fade" id="inputmodal-lg" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
  <div class="modal-header">
  <h4 class="modal-title">Input Nilai Siswa</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  </div>
  <div class="modal-body">
    <table border="1" cellpadding="5" style="border-color:white; margin-left:6%;">
        <tr>
          <td style="width:14rem"> Nama </td>
          <td> : </td>
          <td style="width:20rem">{{ $tampilan_nilai['nama'] }}   
          </td>
        </tr>
        <tr>
          <td> NISN </td>
          <td> : </td>
          <td>{{ $tampilan_nilai['nisn'] }}</td>
        </tr>
  
        <tr>
          <td> NIS </td>
          <td> : </td>
          <td>{{ $tampilan_nilai['nis'] }}</td> 
        </tr>
  
        <form action="{{ route('tampilannilai.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <input type="text" style="width:15%; margin-left:7%" name="siswa_id" id="siswa_id" value="{{ $tampilan_nilai['id_siswa'] }}" hidden>
      <tr>    
        <td> Kelas </td>
        <td> : </td>
        <td>
        <select class="form-control" name="kelas_siswa_input" id="kelas_siswa_input" required >
        @foreach ($tampil_kelas as $item)
        <option value="" selected hidden disabled>Pilih Kelas</option>
        <option value="{{ $item->id_kelas}}">{{ $item->nama_kelas }}</option>
        @endforeach
        </select> 
        </td>
      </tr>      
  
      <tr>    
        <td> Semester </td>
        <td> : </td>
        <td>
    <select class="form-control" name="semester_input" id="semester_input" required >
    <option value="" selected hidden disabled> Pilih Semester</option>
    <option value="1"> 1 </option>
    <option value="2"> 2 </option>
    </select>
        </td>
    </tr>   
  
    <table name="table_nilai" id="table_nilai" border="1" cellpadding="5" style="width: 90%; margin: 10px 0px 0px 50px;">
    <tr style="text-align: center">
    <td rowspan="2" style="width: 2%">No</td>
    <td rowspan="2" style="width: 30%">Mata Pelajaran</td>  
    <td rowspan="2" style="width: 5%">KKM</td>
    <td colspan="2">Nilai Hasil Belajar</td>
    </tr> 
    <tr style="text-align: center">
    <td style="width: 5%"> Angka</td>
    <td style="width: 5%"> Prediket</td>
    </tr>  
  
  <tr>
    <?php $no=0; ?> 
  <td style="text-align: center"><?php $no++; echo $no ?></td>
  <td>
  
      <select class="form-control" name="mapel_nilai" id="mapel_nilai" required >
        @foreach ($mapel as $item)
        <option value="" selected hidden disabled>Pilih Mata Pelajaran</option>
        <option value="{{ $item->id_mapel}}">{{ $item->nama_mapel }}</option>
        @endforeach
        </select>   
  </td> 
  <td style="text-align: center">
  <input name="kkm_nilai" id="kkm_nilai" type="text" style="width:100%; text-align:center"/>
  </td> 
  <td style="text-align: center">
  <input name="siswa_nilai" id="siswa_nilai" type="text" style="width:100%; text-align:center"/>  
  <td></td>
  </tr>  
  
  </table>
  
  
  <div class="modal-footer justify-content-between">
  <button type="submit" name="submit_data" class="btn btn-primary" style="margin-left:680px">Simpan</button>
  </div>
  </form>
  
  </div>
  
  </div>
  
@endsection