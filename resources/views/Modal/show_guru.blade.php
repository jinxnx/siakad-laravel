<div class="modal fade" id="show_guru{{ $item->id_guru }}">
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
                Biodata Guru 
            </th>
        </tr>
        
        <tr>
        <td rowspan="6" style="padding: 0 0 0 0; width:219px; height:338.36px">
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
            <td class="title">NIP</td>
        <td class="value"> {{ $item->nip }} </td>

            <td class="title">Tempat / Tanggal Lahir</td>
            <td class="value"> {{ $item->tempat_lahir }} / {{ \Carbon\Carbon::parse($item->tanggal_lahir)->format('d-m-Y') }} </td>
        </tr>

        <tr>
           <td class="title">Mata Pelajaran</td>
           <td class="value"> {{ $item->mapel['nama_mapel'] }} </td>

           <td class="title">Jabatan</td>
           <td class="value"> {{ $item->jabatan }}  </td>
        </tr>
    
        <tr>
            <td class="title">NUPTK</td>
            <td class="value"> {{ $item->nuptk }} </td>

            <td class="title">Tahun Sertifikasi</td>
            <td class="value"> {{ $item->tahun_sertifikasi }}  </td>
        </tr>

        <tr>
            <td class="title">Nama Ibu</td>
            <td class="value" colspan="3">{{ $item->nama_ibu }}</td>
        </tr>
        
        <tr>
            <td colspan="5" style="height: 50px; font-weight:bold" class="space">SK Calon Pegawai</td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title2" >Golongan</td>
                <td colspan="3" class="value">{{ $item->golongan_capeg }}</td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Terhitung Mulai Tanggal</td>
                <td colspan="3" class="value">{{ \Carbon\Carbon::parse($item->tmt_capeg)->format('d-m-Y') }}</td>
            </tr>
        
        </tr>

        <tr>
            <td colspan="5" style="height: 50px; font-weight:bold" class="space">SK Terakhir</td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title2" >Golongan</td>
                <td colspan="3" class="value">{{ $item->golongan_akhir }}</td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Terhitung Mulai Tanggal</td>
                <td colspan="3" class="value">{{ \Carbon\Carbon::parse($item->tmt_akhir)->format('d-m-Y') }}</td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Masa Kerja</td>
                <td colspan="3" class="value"> {{ $item->masa_kerjath }} Tahun {{ $item->masa_kerjabln }} Bulan  </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Mulai Bertugas di Sekolah Ini</td>
                <td colspan="3" class="value">{{ \Carbon\Carbon::parse($item->mulai_tugas)->format('d-m-Y') }}</td>
            </tr>
        </tr>
        
        <tr>
            <td colspan="5" style="height: 50px; font-weight: bold" class="space"> Riwayat Pendidikan </td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title2">Pendidikan Terakhir</td>
                <td colspan="3" class="value">{{ $item->tingkat_ijazah }}</td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Jurusan Perkuliahan</td>
                <td colspan="3" class="value">{{ $item->jurusan_kuliah }}</td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Tahun Tamat</td>
                <td colspan="3" class="value">{{ $item->tahun_tamat }}</td>
            </tr>
        </tr>

        <tr>
            <td colspan="5" style="height: 50px; font-weight: bold" class=""> Lainnya </td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title2">Jumlah Jam Mengajar</td>
                <td colspan="3" class="value">{{ $item->jumlah_jam }} JP</td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Posisi di Sekolah</td>
                <td colspan="3" class="value">{{ $item->ket }}</td>
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