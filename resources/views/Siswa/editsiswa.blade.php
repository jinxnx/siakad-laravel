@extends('layout.main')

@section('content')

<section class="content">
<div class="card" style="height: auto">
    <br/>  

<form action="/datasiswa/{{ $edit_siswa->id_siswa }}" method="POST" enctype="multipart/form-data"> 
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
                Biodata Siswa 
            </th>
        </tr>
        
        <tr>
        <td rowspan="9" style="width: 0">
          <img src="data:image/jpeg;base64, {{ $image }}" style="width: 180px; height:250px"/>
          <button type="button" class="btn btn-block btn-default btn-sm" onclick="" style="font-weight: bold">Ganti Foto</button>
        </td>
        </tr>	
        
        
        <tr>
            <td style="width: 20%" class="title">Nama</td>
            <td class="value"> 
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $edit_siswa->nama }}" placeholder="{{ $edit_siswa->nama }}">    
            </td>
        </tr>
        <tr>
            <td class="title">NIS</td>
            <td class="value"> 
                <input type="text" class="form-control" id="nis_siswa" name="nis_siswa" value="{{ $edit_siswa->nis }}" placeholder="{{ $edit_siswa->nis }}">
            </td>
        </tr>
        <tr>
            <td class="title">NISN</td>
            <td class="value">
                <input type="text" class="form-control" id="nisn_siswa" name="nisn_siswa" value="{{ $edit_siswa->nisn }}" placeholder="{{ $edit_siswa->nisn }}">
            </td>
        </tr>

        <tr>
            <td class="title">Jenis Kelamin</td>
            <td class="value">
                <select type="option" class="form-control" id="jk_siswa" name="jk_siswa" placeholder="">
                    <option selected hidden value="{{ $edit_siswa->jenis_kelamin }}">
                          <?php 
                        $jk=($edit_siswa->jenis_kelamin); 
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
            <td class="title">Kelas </td>
            <td class="value">
             @if (is_null($edit_siswa['kelas_id']))
                <select class="form-control" name="kelas_siswa" id="kelas_siswa" value="">
                @foreach ($kelas as $item) 
                <option value="{{ $edit_siswa->kelas['id_kelas'] }}" selected hidden>{{ $edit_siswa->kelas['nama_kelas'] }}</option>
                <option value="{{ $item->id_kelas }}">{{ $item->nama_kelas }}</option>
                @endforeach
                </select>
            @else  
                <select class="form-control" name="kelas_siswa" id="kelas_siswa" value="{{ $edit_siswa->kelas['id_kelas'] }}">
                @foreach ($kelas as $item) 
                <option value="{{ $edit_siswa->kelas['id_kelas'] }}" selected hidden>{{ $edit_siswa->kelas['nama_kelas'] }}</option>
                <option value="{{ $item->id_kelas }}">{{ $item->nama_kelas }}</option>
                @endforeach
                </select>   
            @endif
            </td>
        </tr>
        <tr>
            <td class="title">Tempat / Tanggal Lahir</td>
            <td class="value" style="display:flex; border-style:hidden"> 
                <input type="text" class="form-control" id="tl_siswa" name="tl_siswa" placeholder="{{ $edit_siswa->tempat_lahir }}" value="{{ $edit_siswa->tempat_lahir }}" style="width:50%">
                <label style="padding: 5px 5px 0px 5px"> / </label>
                <input type="date" class="form-control" id="tgl_siswa" name="tgl_siswa" value="{{ $edit_siswa->tanggal_lahir }}" data-date-format="DD MMMM YYYY" style="width: 50%">     
            </td>
        </tr>
        <tr>
          <td class="title">Agama</td>
          <td class="value">
            <input type="text" class="form-control" id="agama_siswa" name="agama_siswa" placeholder="{{ $edit_siswa->agama }} " value="{{ $edit_siswa->agama }} ">
          </td>
      </tr>
        <tr>
            <td class="title">Alamat</td>
            <td class="value">
                <input type="text" class="form-control" id="alamat_siswa" name="alamat_siswa" placeholder="{{ $edit_siswa->alamat }}  " value="{{ $edit_siswa->alamat }}  ">    
            </td>
        </tr>
        
        <tr>
            <td colspan="3" style="height: 50px" class="title">Data Orang Tua Siswa</td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title">Nama Ayah</td>
                <td class="value">
                    <input type="text" class="form-control" id="nayah_siswa" name="nayah_siswa" placeholder="{{ $edit_siswa->nama_ayah }}  " value="{{ $edit_siswa->nama_ayah }}  ">
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title">Pekerjaan Ayah</td>
                <td class="value">
                    <input type="text" class="form-control" id="payah_siswa" name="payah_siswa" placeholder="{{ $edit_siswa->pekerjaan_ayah }}" value="{{ $edit_siswa->pekerjaan_ayah }}">     
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title">Nama Ibu</td>
                <td class="value">
                    <input type="text" class="form-control" id="nibu_siswa" name="nibu_siswa" placeholder="{{ $edit_siswa->nama_ibu }}   " value="{{ $edit_siswa->nama_ibu }} ">        
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title">Pekerjaan Ibu</td>
                <td class="value">
                    <input type="text" class="form-control" id="pibu_siswa" name="pibu_siswa" placeholder="{{ $edit_siswa->pekerjaan_ibu }} " value="{{ $edit_siswa->pekerjaan_ibu }} ">    
                </td>
            </tr>
        </tr>
        
        <tr>
            <td colspan="4" style="height: 50px" class="title">Data Sekolah Asal</td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title">Asal Sekolah</td>
                <td class="value">
                    <input type="text" class="form-control" id="asekolah_siswa" name="asekolah_siswa" placeholder="{{ $edit_siswa->asal_sekolah }}" value="{{ $edit_siswa->asal_sekolah }}">       
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title">Nomor Peserta</td>
                <td class="value">
                <input type="text" class="form-control" id="nopes_siswa" name="nopes_siswa" placeholder="{{ $edit_siswa->nopes }}" value="{{ $edit_siswa->nopes }}">  
            </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title">Nomor Ijazah</td>
                <td class="value">        
                <input type="text" class="form-control" id="nijazah_siswa" name="nijazah_siswa" placeholder="{{ $edit_siswa->no_ijazah }}" value="{{ $edit_siswa->no_ijazah }}">    
            </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title">Nomor SKHUN</td>
                <td class="value">
                    <input type="text" class="form-control" id="nskhun_siswa" name="nskhun_siswa" placeholder="{{ $edit_siswa->no_skhun }} " value="{{ $edit_siswa->no_skhun }} ">    
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

