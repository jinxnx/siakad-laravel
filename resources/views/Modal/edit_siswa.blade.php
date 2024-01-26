<div class="modal fade" id="edit_siswa{{ $item->id_siswa }}">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
        
    <form action="/datasiswa/{{ $item->id_siswa }}" method="POST" enctype="multipart/form-data"> 
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
                        Biodata Siswa 
                    </th>
                </tr>
                
                <tr>
                <td rowspan="5" style="width: 0; padding: 0 0 0 0">
                    <?php 
                        $foto = $item->foto;
                        $img = base64_encode($foto);
                    ?>
                        <img src="data:image/jpeg;base64, {{ $img }}" style="width: 100%; height:100%"/>
                        <button type="button" class="btn btn-block btn-default btn-sm" onclick="" style="font-weight: bold">Ganti Foto</button>
                </td>
                </tr>	
                
                
                <tr>
                    <td class="title">Nama</td>
                    <td class="value"> 
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $item->nama }}" placeholder="{{ $item->nama }}">    
                    </td>

                    <td class="title">Jenis Kelamin</td>
                    <td class="value">
                        <select type="option" class="form-control" id="jk_siswa" name="jk_siswa" placeholder="">
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
                    <td class="title">NIS</td>
                    <td class="value"> 
                        <input type="text" class="form-control" id="nis_siswa" name="nis_siswa" value="{{ $item->nis }}" placeholder="{{ $item->nis }}">
                    </td>

                    <td class="title">Tempat / Tanggal Lahir</td>
                    <td class="value" style="" colspan=""> 
                        <input type="text" class="form-control" id="tl_siswa" name="tl_siswa" placeholder="{{ $item->tempat_lahir }}" value="{{ $item->tempat_lahir }}" >
                        <input type="date" class="form-control" id="tgl_siswa" name="tgl_siswa" value="{{ $item->tanggal_lahir }}" data-date-format="DD MMMM YYYY">     
                    </td>
                </tr>

                <tr>
                    <td class="title">NISN</td>
                    <td class="value">
                        <input type="text" class="form-control" id="nisn_siswa" name="nisn_siswa" value="{{ $item->nisn }}" placeholder="{{ $item->nisn }}">
                    </td>

                    <td class="title">Agama</td>
                    <td class="value">
                        <input type="text" class="form-control" id="agama_siswa" name="agama_siswa" placeholder="{{ $item->agama }} " value="{{ $item->agama }} ">
                  </td>
                </tr>
        
                <tr>
                    <td class="title">Kelas </td>
                    <td class="value">
                     @if (is_null($item['kelas_id']))
                        <select class="form-control" name="kelas_siswa" id="kelas_siswa" value="">
                        @foreach ($kelas as $kelas_siswa) 
                        <option value="{{ $item->id_kelas }}" selected hidden>{{ $item->nama_kelas }}</option>
                        <option value="{{ $kelas_siswa->id_kelas }}">{{ $kelas_siswa->nama_kelas }}</option>
                        @endforeach
                        </select>
                    @else  
                        <select class="form-control" name="kelas_siswa" id="kelas_siswa" value="{{ $item->kelas['id_kelas'] }}">
                        @foreach ($kelas as $kelas_siswa) 
                        <option value="{{ $item->kelas['id_kelas']}}" selected hidden> {{ $item->kelas['nama_kelas'] }} </option>
                        <option value="{{ $kelas_siswa->id_kelas }}">{{ $kelas_siswa->nama_kelas }}</option>
                        @endforeach
                        </select>   
                    @endif
                    </td>
                   
                    <td class="title">Alamat</td>
                    <td class="value">
                        <input type="text" class="form-control" id="alamat_siswa" name="alamat_siswa" placeholder="{{ $item->alamat }}  " value="{{ $item->alamat }}  ">    
                    </td>
                </tr>
                
                <tr>
                    <td colspan="5" style="height: 50px; font-weight:bold">Data Orang Tua Siswa</td>
                </tr>
                
                <tr>
                    <tr>
                        <td colspan="2" class="title3">Nama Ayah</td>
                        <td colspan="3" class="value">
                            <input type="text" class="form-control" id="nayah_siswa" name="nayah_siswa" placeholder="{{ $item->nama_ayah }}  " value="{{ $item->nama_ayah }}  ">
                        </td>
                    </tr>
                
                    <tr>
                        <td colspan="2" class="title3">Pekerjaan Ayah</td>
                        <td colspan="3" class="value">
                            <input type="text" class="form-control" id="payah_siswa" name="payah_siswa" placeholder="{{ $item->pekerjaan_ayah }}" value="{{ $item->pekerjaan_ayah }}">     
                        </td>
                    </tr>
                
                    <tr>
                        <td colspan="2" class="title3">Nama Ibu</td>
                        <td colspan="3" class="value">
                            <input type="text" class="form-control" id="nibu_siswa" name="nibu_siswa" placeholder="{{ $item->nama_ibu }}   " value="{{ $item->nama_ibu }} ">        
                        </td>
                    </tr>
                
                    <tr>
                        <td colspan="2" class="title3">Pekerjaan Ibu</td>
                        <td colspan="3" class="value">
                            <input type="text" class="form-control" id="pibu_siswa" name="pibu_siswa" placeholder="{{ $item->pekerjaan_ibu }} " value="{{ $item->pekerjaan_ibu }} ">    
                        </td>
                    </tr>
                </tr>
                
                <tr>
                    <td colspan="5" style="height: 50px; font-weight:bold" >Data Sekolah Asal</td>
                </tr>
                
                <tr>
                    <tr>
                        <td colspan="2" class="title3">Asal Sekolah</td>
                        <td colspan="3" class="value">
                            <input type="text" class="form-control" id="asekolah_siswa" name="asekolah_siswa" placeholder="{{ $item->asal_sekolah }}" value="{{ $item->asal_sekolah }}">       
                        </td>
                    </tr>
                
                    <tr>
                        <td colspan="2" class="title3">Nomor Peserta</td>
                        <td colspan="3" class="value">
                        <input type="text" class="form-control" id="nopes_siswa" name="nopes_siswa" placeholder="{{ $item->nopes }}" value="{{ $item->nopes }}">  
                    </td>
                    </tr>
                
                    <tr>
                        <td colspan="2" class="title3">Nomor Ijazah</td>
                        <td colspan="3" class="value">        
                        <input type="text" class="form-control" id="nijazah_siswa" name="nijazah_siswa" placeholder="{{ $item->no_ijazah }}" value="{{ $item->no_ijazah }}">    
                    </td>
                    </tr>
                
                    <tr>
                        <td colspan="2" class="title3">Nomor SKHUN</td>
                        <td colspan="3" class="value">
                            <input type="text" class="form-control" id="nskhun_siswa" name="nskhun_siswa" placeholder="{{ $item->no_skhun }} " value="{{ $item->no_skhun }} ">    
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