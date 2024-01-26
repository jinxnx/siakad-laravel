@extends('layout.main')

@section('content')
<br/>
<section class="content">
<div class="card" style="height: auto">
<br/>
<h1 class="card-title" style="text-align:center; font-size:2rem"> Sekolah Menengah Kejuruan Negeri 1 Sijunjung </h1>

<form action="/dataguru/{{ $edit_guru->id_guru }}" method="POST" enctype="multipart/form-data"> 
  @csrf
  @method('PUT')

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
      <button type="button" class="btn btn-block btn-default btn-sm" onclick="" style="font-weight: bold">Ganti Foto</button>
    </td>
    </tr>	
    
    
    <tr>
        <td style="width: 20%" class="title">Nama</td>
        <td class="value"> 
          <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $edit_guru->nama }}" placeholder="{{ $edit_guru->nama }}">  
        </td>
    </tr>
    <tr>
        <td class="title">NIP</td>
        <td class="value"> 
          <input type="text" class="form-control" id="nip_guru" name="nip_guru" value="{{ $edit_guru->nip }}" placeholder="{{ $edit_guru->nip }}">    
        </td>
    </tr>
    <tr>
        <td class="title">Mata Pelajaran</td>
        <td class="value"> 
          <select type="text" class="form-control" id="mapel_guru" name="mapel_guru">
              <option selected hidden value="{{ $edit_guru->mapel['id_mapel'] }}">{{ $edit_guru->mapel['nama_mapel'] }} </option>
            @foreach ($mapel as $item) 
              <option value="{{ $item->id_mapel }}" >{{ $item->nama_mapel }}</option>
            @endforeach
        </td>
    </tr>

    <tr>
        <td class="title">NUPTK</td>
        <td class="value"> 
          <input type="text" class="form-control" id="nuptk_guru" name="nuptk_guru" value="{{ $edit_guru->nuptk }}" placeholder="{{ $edit_guru->nuptk }}">
        </td>
    </tr>

    <tr>
        <td class="title">Jenis Kelamin</td>
        <td class="value">
          <select type="option" class="form-control" id="jk_guru" name="jk_guru" placeholder="">
            <option selected hidden value="{{ $edit_guru->jenis_kelamin }}">
                  <?php 
                $jk=($edit_guru->jenis_kelamin); 
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
        <td class="title">Jabatan</td>
        <td class="value">
          <input type="text" class="form-control" id="jabatan_guru" name="jabatan_guru" value="{{ $edit_guru->jabatan }}" placeholder="{{ $edit_guru->jabatan }}">
        </td>
    </tr>

    <tr>
        <td class="title">Tahun Sertifikasi</td>
        <td class="value"> 
          <input type="text" class="form-control" id="tahun_sertifikasi" name="tahun_sertifikasi" value="{{ $edit_guru->tahun_sertifikasi }}" placeholder="{{ $edit_guru->tahun_sertifikasi }}">
        </td>
    </tr>

    <tr>
        <td class="title">Tempat / Tanggal Lahir</td>
        <td class="value" style="display:flex; border-style:hidden"> 
          <input type="text" class="form-control" id="tl_guru" name="tl_guru" placeholder="{{ $edit_guru->tempat_lahir }}" value="{{ $edit_guru->tempat_lahir }}" style="width:50%">
          <label style="padding: 5px 5px 0px 5px"> / </label>
          <input type="date" class="form-control" id="tgl_guru" name="tgl_guru" value="{{ $edit_guru->tanggal_lahir }}" data-date-format="DD MMMM YYYY" style="width: 50%">     
      </td>
    </tr>

    <tr>
      <td class="title">Nama Ibu</td>
      <td class="value">
        <input type="text" class="form-control" id="nibu_guru" name="nibu_guru" value="{{ $edit_guru->nama_ibu }}" placeholder="{{ $edit_guru->nama_ibu }}">
        </td>
      </td>
  </tr>
    
    <tr>
        <td colspan="3" style="height: 50px" class="title">SK Calon Pegawai</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title">Golongan</td>
            <td class="value">
              <input type="text" class="form-control" id="golcapeg_guru" name="golcapeg_guru" value="{{ $edit_guru->golongan_capeg }}" placeholder="{{ $edit_guru->golongan_capeg }}">
            </td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Terhitung Mulai Tanggal</td>
            <td class="value"> 
              <input type="date" data-date-format="DD MMMM YYYY" class="form-control" id="tmtcapeg_guru" name="tmtcapeg_guru" value="{{ $edit_guru->tmt_capeg }}" placeholder="{{ $edit_guru->tmt_capeg }}">
            </td>
        </tr>
    
    </tr>

    <tr>
        <td colspan="4" style="height: 50px" class="title">SK Terakhir</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title">Golongan</td>
            <td class="value">
              <input type="text" class="form-control" id="golakhir_guru" name="golakhir_guru" value="{{ $edit_guru->golongan_akhir }}" placeholder="{{ $edit_guru->golongan_akhir }}">
            </td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Terhitung Mulai Tanggal</td>
            <td class="value">
              <input type="date" data-date-format="DD MMMM YYYY" class="form-control" id="tmtakhir_guru" name="tmtakhir_guru" value="{{ $edit_guru->tmt_akhir }}" placeholder="{{ $edit_guru->tmt_akhir }}">
            </td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Masa Kerja</td>
            <td class="value" style="display:flex; border-style:hidden"> 
              <input type="text" class="form-control" id="mkt_guru" name="mkt_guru" value="{{ $edit_guru->masa_kerjath }}" placeholder="{{ $edit_guru->masa_kerjath }}"> 
              <label style="padding: 5px 10px 0px 5px">Tahun</label>
              <input type="text" class="form-control" id="mkb_guru" name="mkb_guru" value="{{ $edit_guru->masa_kerjabln }}" placeholder="{{ $edit_guru->masa_kerjabln }}">
              <label style="padding: 5px 10px 0px 5px">Bulan</label>
            </td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Mulai Bertugas di Sekolah Ini</td>
            <td class="value">
              <input type="date" data-date-format="DD MMMM YYYY" class="form-control" id="mb_guru" name="mb_guru" value="{{ $edit_guru->mulai_tugas }}" placeholder="{{ $edit_guru->mulai_tugas }}">
            </td>
        </tr>
    </tr>

    <tr>
        <td colspan="4" style="height: 50px" class="title">Riwayat Pendidikan</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title">Pendidikan Terakhir</td>
            <td class="value">
              <input type="text" class="form-control" id="pa_guru" name="pa_guru" value="{{ $edit_guru->tingkat_ijazah }}" placeholder="{{ $edit_guru->tingkat_ijazah }}">
            </td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Jurusan Perkuliahan</td>
            <td class="value">
              <input type="text" class="form-control" id="jp_guru" name="jp_guru" value="{{ $edit_guru->jurusan_kuliah }}" placeholder="{{ $edit_guru->jurusan_kuliah }}">  
        </td>
        </tr>
    
        <tr>
            <td colspan="2" class="title">Tahun Tamat</td>
            <td class="value">
              <input type="text" class="form-control" id="tt_guru" name="tt_guru" value="{{ $edit_guru->tahun_tamat }}" placeholder="{{ $edit_guru->tahun_tamat }}">
            </td>
        </tr>
    

        <tr>
            <td colspan="4" style="height: 50px" class="title">Lainnya</td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title">Jumlah Jam Mengajar</td>
                <td class="value">
                  <input type="text" class="form-control" id="jjm_guru" name="jjm_guru" value="{{ $edit_guru->jumlah_jam }}" placeholder="{{ $edit_guru->jumlah_jam }}">
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title">Posisi di Sekolah</td>
                <td class="value">
                  <input type="text" class="form-control" id="ps_guru" name="ps_guru" value="{{ $edit_guru->ket }}" placeholder="{{ $edit_guru->ket }}">
                </td>
            </tr>
        
    </tr> 
    </table>  

</div>

<div class="modal-footer justify-content-between">
  <button type="submit" name="submit_data" class="btn btn-primary" style="margin-left:75%; width:16rem">Simpan</button>
</div>
</form>

@endsection

