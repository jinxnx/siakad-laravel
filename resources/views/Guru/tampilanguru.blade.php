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
            Biodata Guru 
        </th>
    </tr>
    
    <tr>
    <td rowspan="10" style="width: 0">
      <img src="data:image/jpeg;base64, {{ $image }}" style="width: 180px; height:250px"/>
    </td>
    </tr>	
    
    
    <tr>
        <td style="width: 20%" class="title">Nama</td>
        <td class="value"> {{ $tampilan_guru->nama }} </td>
    </tr>
    <tr>
        <td class="title">NIP</td>
        <td class="value"> {{ $tampilan_guru->nip }} </td>
    </tr>
    <tr>
        <td class="title">Mata Pelajaran</td>
        <td class="value"> {{ $tampilan_guru->mapel['nama_mapel'] }} </td>
    </tr>

    <tr>
        <td class="title">NUPTK</td>
        <td class="value"> {{ $tampilan_guru->nuptk }} </td>
    </tr>

    <tr>
        <td class="title">Jenis Kelamin</td>
        <td class="value">
          <?php 
          $jk=($tampilan_guru->jenis_kelamin); 
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
        <td class="title">Jabatan</td>
        <td class="value"> {{ $tampilan_guru->jabatan }}  </td>
    </tr>

    <tr>
        <td class="title">Tahun Sertifikasi</td>
        <td class="value"> {{ $tampilan_guru->tahun_sertifikasi }}  </td>
    </tr>

    <tr>
        <td class="title">Tempat / Tanggal Lahir</td>
        <td class="value"> {{ $tampilan_guru->tempat_lahir }} / {{ $tampilan_guru->tanggal_lahir }} </td>
    </tr>
    
    <tr>
      <td class="title">Nama Ibu</td>
      <td class="value">{{ $tampilan_guru->nama_ibu }}</td>
    </tr>
    
    <tr>
        <td colspan="3" style="height: 50px" class="title">SK Calon Pegawai</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title">Golongan</td>
            <td class="value">{{ $tampilan_guru->golongan_capeg }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Terhitung Mulai Tanggal</td>
            <td class="value"> {{ $tampilan_guru->tmt_capeg }} </td>
        </tr>
    
    </tr>

    <tr>
        <td colspan="4" style="height: 50px" class="title">SK Terakhir</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title">Golongan</td>
            <td class="value">{{ $tampilan_guru->golongan_akhir }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Terhitung Mulai Tanggal</td>
            <td class="value">{{ $tampilan_guru->tmt_akhir }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Masa Kerja</td>
            <td class="value">{{ $tampilan_guru->masa_kerjath }} Tahun {{ $tampilan_guru->masa_kerjabln }} Bulan </td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Mulai Bertugas di Sekolah Ini</td>
            <td class="value">{{ $tampilan_guru->mulai_tugas }}</td>
        </tr>
    </tr>

    <tr>
        <td colspan="4" style="height: 50px" class="title">Riwayat Pendidikan</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title">Pendidikan Terakhir</td>
            <td class="value">{{ $tampilan_guru->tingkat_ijazah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Jurusan Perkuliahan</td>
            <td class="value">{{ $tampilan_guru->jurusan_kuliah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Tahun Tamat</td>
            <td class="value">{{ $tampilan_guru->tahun_tamat }}</td>
        </tr>
    

        <tr>
            <td colspan="4" style="height: 50px" class="title">Lainnya</td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title">Jumlah Jam Mengajar</td>
                <td class="value">{{ $tampilan_guru->jumlah_jam }}</td>
            </tr>
        
            <tr>
                <td colspan="2" class="title">Posisi di Sekolah</td>
                <td class="value">{{ $tampilan_guru->ket }}</td>
            </tr>
        
    </tr>
    
    </table>  

</div>
 

@endsection