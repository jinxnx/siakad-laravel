<div class="modal fade" id="modal_siswa{{ $item->id_siswa }}">
<div class="modal-dialog modal-xl">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
    
<div class="box" style=>
     
     <style>
        table {
          border: 2px solid black;
          border-collapse: collapse;
          table-layout: fixed;
          display: table;
          
        }

        .table-border td{
            border: 1px solid black;
            vertical-align: middle;
            text-align: center; 
           
        }

        .title{
           font-weight: bold;
           background-color: lightgray;
        }

        .title2{
            font-weight: bold;
            background-color: lightgray;
            height: 84.88px;
        }

        .value{
            padding-left: 5px;
        }

        </style>
        
    
    <table class="table-border" style="width: 100%">
    <tr>
        <th colspan="5" style="height: 50px; text-align: center; font-size: 30px">
            Biodata Siswa 
        </th>
    </tr>
    
    <tr>
    <td rowspan="5" style="padding: 0 0 0 0; width:auto; height: 338.36px">
    <?php 
        $foto = $item->foto;
        $img = base64_encode($foto);
    ?>
        <img src="data:image/jpeg;base64, {{ $img }}" style="width: 100%; height:100%"/>
    </td>
    </tr>	
    
    
    <tr>
        <td style="" class="title">Nama</td>
        <td class="value"> {{ $item->nama }} </td>

        <td class="title">Jenis Kelamin</td>
        <td class="value">
          <?php 
          $jk=($item->jenis_kelamin); 
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
        <td class="title">NIS</td>
        <td class="value"> {{ $item->nis }} </td>
        <td class="title">Tempat / Tanggal Lahir</td>
        <td class="value"> {{ $item->tempat_lahir }} / {{ \Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y') }} </td>
    </tr>
    <tr>
        <td class="title">NISN</td>
        <td class="value"> {{ $item->nisn }} </td>
        <td class="title">Agama</td>
        <td class="value">{{ $item->agama }}</td>
    </tr>

    <tr>
        <td class="title">Kelas</td>
        <td class="value"> {{ $item->kelas['nama_kelas'] }} </td>
        <td class="title">Alamat</td>
        <td class="value"> {{ $item->alamat }} </td>
    </tr>
    
    <tr>
        <td colspan="5" style="height: 50px; font-weight:bold" class="">Data Orang Tua Siswa</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title2" >Nama Ayah</td>
            <td colspan="3" class="value">{{ $item->nama_ayah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title2">Pekerjaan Ayah</td>
            <td colspan="3" class="value">{{ $item->pekerjaan_ayah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title2">Nama Ibu</td>
            <td colspan="3" class="value">{{ $item->nama_ibu }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title2">Pekerjaan Ibu</td>
            <td colspan="3" class="value">{{ $item->pekerjaan_ibu}}</td>
        </tr>
    </tr>
    
    <tr>
        <td colspan="5" style="height: 50px; font-weight: bold" class="">Data Sekolah Asal</td>
    </tr>
    
    <tr>
        <tr>
            <td colspan="2" class="title2">Asal Sekolah</td>
            <td colspan="3" class="value">{{ $item->asal_sekolah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title2">Nomor Peserta</td>
            <td colspan="3" class="value">{{ $item->nopes }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title2">Nomor Ijazah</td>
            <td colspan="3" class="value">{{ $item->no_ijazah }}</td>
        </tr>
    
        <tr>
            <td colspan="2" class="title2">Nomor SKHUN</td>
            <td colspan="3" class="value">{{ $item->no_skhun }}</td>
        </tr>
    </tr>
    
    </table>  

</div>

<div class="modal-footer justify-content-between">
    <button data-dismiss="modal" class="btn btn-primary" style="margin-left:auto; width:15%"> Tutup </button>
</div>

</div>   
</div>   
</div>
</div>