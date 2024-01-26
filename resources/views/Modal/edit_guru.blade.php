<div class="modal fade" id="edit_guru{{ $item->id_guru }}">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
        
        <form action="/dataguru/{{ $item->id_guru }}" method="POST" enctype="multipart/form-data"> 
            @csrf
           @method('PUT')
           <div class="box" style="
               display: flex;
               justify-content: center;
               align-items: center;">
                    
           <style>
                table {
                    border: 2px solid black;
                    border-collapse: collapse;
                         
                }
               
                .table-border td{
                    border: 1px solid black;
                }
               
                .title{
                    font-weight: bold;
                    padding-left: 5px; 
       
                }
                       
                .title3{
                    height: 80.95px;
                    font-weight: bold;
                    background-color: lightgray;
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
            <td class="value"> 
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $item->nama }}" placeholder="{{ $item->nama }}">  
            </td>
    

            <td class="title">Jenis Kelamin</td>
            <td class="value">
                <select type="option" class="form-control" id="jk_guru" name="jk_guru" placeholder="">
                  <option selected hidden value="{{ $item->jenis_kelamin }}">
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
                    </option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>	
                    </select>
              </td>
        </tr>

        <tr>
            <td class="title">NIP</td>
            <td class="value"> 
                <input type="text" class="form-control" id="nip_guru" name="nip_guru" value="{{ $item->nip }}" placeholder="{{ $item->nip }}">    
            </td>

            <td class="title">Tempat / Tanggal Lahir</td>
            <td class="value" style=""> 
                <input type="text" class="form-control" id="tl_guru" name="tl_guru" placeholder="{{ $item->tempat_lahir }}" value="{{ $item->tempat_lahir }}" >
                <input type="date" class="form-control" id="tgl_guru" name="tgl_guru" value="{{ $item->tanggal_lahir }}" data-date-format="DD MMMM YYYY">     
            </td>
        </tr>

        <tr>
           <td class="title">Mata Pelajaran</td>
           <td class="value"> 
                <select type="text" class="form-control" id="mapel_guru" name="mapel_guru">
                    <option selected hidden value="{{ $item->mapel['id_mapel'] }}">{{ $item->mapel['nama_mapel'] }} </option>
                @foreach ($mapel as $item2) 
                    <option value="{{ $item2->id_mapel }}" >{{ $item2->nama_mapel }}</option>
                @endforeach
                </select>
            </td>
        
            <td class="title">Jabatan</td>
            <td class="value">
                <input type="text" class="form-control" id="jabatan_guru" name="jabatan_guru" value="{{ $item->jabatan }}" placeholder="{{ $item->jabatan }}">
            </td>
        </tr>
    
        <tr>
            <td class="title">NUPTK</td>
            <td class="value"> 
                <input type="text" class="form-control" id="nuptk_guru" name="nuptk_guru" value="{{ $item->nuptk }}" placeholder="{{ $item->nuptk }}">
            </td>

            <td class="title">Tahun Sertifikasi</td>
            <td class="value"> 
                <input type="text" class="form-control" id="tahun_sertifikasi" name="tahun_sertifikasi" value="{{ $item->tahun_sertifikasi }}" placeholder="{{ $item->tahun_sertifikasi }}">
            </td>
        </tr>

        <tr>
            <td class="title">Nama Ibu</td>
            <td class="value" colspan="3">
                <input type="text" class="form-control" id="nibu_guru" name="nibu_guru" value="{{ $item->nama_ibu }}" placeholder="{{ $item->nama_ibu }}">
            </td>
        </tr>
        
        <tr>
            <td colspan="5" style="height: 50px; font-weight:bold" class="space">SK Calon Pegawai</td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title2" >Golongan</td>
                <td colspan="3" class="value">
                    <input type="text" class="form-control" id="golcapeg_guru" name="golcapeg_guru" value="{{ $item->golongan_capeg }}" placeholder="{{ $item->golongan_capeg }}">
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Terhitung Mulai Tanggal</td>
                <td colspan="3" class="value"> 
                    <input type="date" data-date-format="DD MMMM YYYY" class="form-control" id="tmtcapeg_guru" name="tmtcapeg_guru" value="{{ $item->tmt_capeg }}" placeholder="{{ $item->tmt_capeg }}">
                </td>
            </tr>
        
        </tr>

        <tr>
            <td colspan="5" style="height: 50px; font-weight:bold" class="space">SK Terakhir</td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title2" >Golongan</td>
                <td class="value" colspan="3">
                    <input type="text" class="form-control" id="golakhir_guru" name="golakhir_guru" value="{{ $item->golongan_akhir }}" placeholder="{{ $item->golongan_akhir }}">
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Terhitung Mulai Tanggal</td>
                <td class="value" colspan="3">
                    <input type="date" data-date-format="DD MMMM YYYY" class="form-control" id="tmtakhir_guru" name="tmtakhir_guru" value="{{ $item->tmt_akhir }}" placeholder="{{ $item->tmt_akhir }}">
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Masa Kerja</td>
                <td class="value" colspan="3">
                <div class="container" style="display: flex"> 
                    <input type="text" class="form-control" id="mkt_guru" name="mkt_guru" value="{{ $item->masa_kerjath }}" placeholder="{{ $item->masa_kerjath }}"> 
                    <label style="padding: 8px 10px 0px 5px">Tahun</label>
                    <input type="text" class="form-control" id="mkb_guru" name="mkb_guru" value="{{ $item->masa_kerjabln }}" placeholder="{{ $item->masa_kerjabln }}">
                    <label style="padding: 8px 10px 0px 5px">Bulan</label>
                </div>
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Mulai Bertugas di Sekolah Ini</td>
                <td class="value" colspan="3">
                    <input type="date" data-date-format="DD MMMM YYYY" class="form-control" id="mb_guru" name="mb_guru" value="{{ $item->mulai_tugas }}" placeholder="{{ $item->mulai_tugas }}">
                </td>
            </tr>
        </tr>
        
        <tr>
            <td colspan="5" style="height: 50px; font-weight: bold" class="space"> Riwayat Pendidikan </td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title2">Pendidikan Terakhir</td>
                <td class="value" colspan="3">
                    <input type="text" class="form-control" id="pa_guru" name="pa_guru" value="{{ $item->tingkat_ijazah }}" placeholder="{{ $item->tingkat_ijazah }}">
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Jurusan Perkuliahan</td>
                <td class="value" colspan="3">
                    <input type="text" class="form-control" id="jp_guru" name="jp_guru" value="{{ $item->jurusan_kuliah }}" placeholder="{{ $item->jurusan_kuliah }}">  
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Tahun Tamat</td>
                <td class="value" colspan="3">
                    <input type="text" class="form-control" id="tt_guru" name="tt_guru" value="{{ $item->tahun_tamat }}" placeholder="{{ $item->tahun_tamat }}">
                </td>
            </tr>
        </tr>

        <tr>
            <td colspan="5" style="height: 50px; font-weight: bold" class=""> Lainnya </td>
        </tr>
        
        <tr>
            <tr>
                <td colspan="2" class="title2">Jumlah Jam Mengajar</td>
                <td class="value" colspan="3">
                    <input type="text" class="form-control" id="jjm_guru" name="jjm_guru" value="{{ $item->jumlah_jam }}" placeholder="{{ $item->jumlah_jam }}">
                </td>
            </tr>
        
            <tr>
                <td colspan="2" class="title2">Posisi di Sekolah</td>
                <<td class="value" colspan="3">
                    <input type="text" class="form-control" id="ps_guru" name="ps_guru" value="{{ $item->ket }}" placeholder="{{ $item->ket }}">
                </td>
            </tr>
        </tr>
        
        </table>  
    
    </div>
    
    <div class="modal-footer justify-content-between">
        <button type="submit" name="submit_data" class="btn btn-primary" style="margin-left:75%; width:16rem">Simpan</button>
    </div>
</form>

    </div>   
    </div>   
    </div>
    </div>