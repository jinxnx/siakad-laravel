@extends('layout.main')

@section('content')

<br/>
<section class="content">
<div class="card" style="height: auto">
<br/>
<h1 class="card-title" style="text-align:center; font-size:2rem"> Sekolah Menengah Kejuruan Negeri 1 Sijunjung </h1>

<div class="box" style="
display: flex;
justify-content: center;
align-items: center;">
 
 <style>
    table, th, td {
      border: 2px solid black;
      border-collapse: collapse;

    }
    .title{
       font-weight: bold;
       padding-left: 5px; 
       height: 40px;
    }
    .value{
        padding-left: 5px;
    }
    </style>
    
    <table style="width: 90%">
    <tr>
        <th colspan="4" style="height: 50px; text-align: center; font-size: 30px">
            Biodata Siswa 
        </th>
    </tr>
    
    <tr>
    <td rowspan="9" style="width: 0">
      <img src="data:image/jpeg;base64, {{ $image }}" style="width: 180px; height:250px"/>
    </td>
    </tr>	
    
    
    <tr>
        <td style="width: 20%" class="title">Nama</td>
        <td class="value"> {{ $tampilan_siswa->nama }} </td>
    </tr>
    <tr>
        <td class="title">NIS</td>
        <td class="value"> {{ $tampilan_siswa->nis }} </td>
    </tr>
    <tr>
        <td class="title">NISN</td>
        <td class="value"> {{ $tampilan_siswa->nisn }} </td>
    </tr>

    <tr>
        <td class="title">Kelas</td>
        <td class="value"> {{ $tampilan_siswa->kelas['nama_kelas'] }} </td>
    </tr>

    <tr>
        <td class="title">Jenis Kelamin</td>
        <td class="value">
          <?php 
          $jk=($tampilan_siswa->jenis_kelamin); 
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
    <tr>
        <td class="title">Tempat / Tanggal Lahir</td>
        <td class="value"> {{ $tampilan_siswa->tempat_lahir }} / {{ $tampilan_siswa->tanggal_lahir }} </td>
    </tr>
    <tr>
      <td class="title">Agama</td>
      <td class="value">{{ $tampilan_siswa->agama }}</td>
  </tr>
    <tr>
        <td class="title">Alamat</td>
        <td class="value"> {{ $tampilan_siswa->alamat }} </td>
    </tr>
    
    <tr>
        <td colspan="3" style="height: 50px" class="title">Data Orang Tua Siswa</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title">Nama Ayah</td>
            <td class="value">{{ $tampilan_siswa->nama_ayah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Pekerjaan Ayah</td>
            <td class="value">{{ $tampilan_siswa->pekerjaan_ayah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Nama Ibu</td>
            <td class="value">{{ $tampilan_siswa->nama_ibu }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Pekerjaan Ibu</td>
            <td class="value">{{ $tampilan_siswa->pekerjaan_ibu}}</td>
        </tr>
    </tr>
    
    <tr>
        <td colspan="4" style="height: 50px" class="title">Data Sekolah Asal</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title">Asal Sekolah</td>
            <td class="value">{{ $tampilan_siswa->asal_sekolah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Nomor Peserta</td>
            <td class="value">{{ $tampilan_siswa->nopes }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Nomor Ijazah</td>
            <td class="value">{{ $tampilan_siswa->no_ijazah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Nomor SKHUN</td>
            <td class="value">{{ $tampilan_siswa->no_skhun }}</td>
        </tr>
    </tr>
    
    </table>  

</div>
 

@endsection