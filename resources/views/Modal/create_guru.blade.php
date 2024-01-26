<div class="modal fade" id="inputmodal-lg" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
	<div class="modal-header">
	<h4 class="modal-title">Input Data Guru</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
	</div>
	<div class="modal-body">
	
	<form action="{{ route('dataguru.store') }}" method="POST" enctype="multipart/form-data"> 
		@csrf
	
	<div class="box1" style="width:150px; height:200px; margin:2rem 0rem 0rem 1rem;">
	<img  style="width: 150px; height:200px" id="foto_guru" name="foto_guru"/>
	<div class="form-group">
	<div class="input-group">
	<div class="custom-file">
	<input type="file" class="custom-file-input" id="inputfoto_guru" name="inputfoto_guru" onchange="PreviewImage();" required oninvalid="this.setCustomValidity('Silahkan Pilih Foto Terlebih Dahulu')" oninput="this.setCustomValidity('')">
	<label class="custom-file-label" for="inputfoto_guru"></label>
	</div></div></div>
	
	<script type="text/javascript">
	function PreviewImage() {
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("inputfoto_guru").files[0]);
	oFReader.onload = function (oFREvent)
	 {
		document.getElementById("foto_guru").src = oFREvent.target.result;
	};
	};
	</script>
	
	</div>
	
	<div class="box2" style="margin:-12.5rem 0rem 4rem 12rem; width:35rem; height:auto">
	<div id="accordion">
	<div class="card">
	<div class="card-header">
				<a class="card-link" data-toggle="collapse" href="#menu1" aria-expanded="false" aria-controls="menu1">
					<span class="collapsed"><i class=""></i></span> 
					<span class="expanded"><i class=""></i></span> 
					Informasi Pribadi Guru
				</a>
			</div>
	
	<div id="menu1" class="expand">
	<div class="card-body">
	
	<div class="form-group">
	<label for="nama_guru">Nama</label>
	<input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="nip_guru">NIP</label>
	<input type="text" class="form-control" id="nip_guru" name="nip_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="mapel_guru">Mata Pelajaran</label>
	<select type="text" class="form-control" id="mapel_guru" name="mapel_guru" placeholder="">
	@foreach ($mapel as $item) 
	  <option value="{{ $item->id_mapel }}">{{ $item->nama_mapel }}</option>
	@endforeach
	</select>
	</div>
	
	<div class="form-group">
	<label for="nuptk_guru">NUPTK</label>
	<input type="text" class="form-control" id="nuptk_guru" name="nuptk_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="jk_guru">Jenis Kelamin</label>
	<select type="option" class="form-control" id="jk_guru" name="jk_guru" placeholder="">
		<option value="L">Laki-Laki</option>
		<option value="P">Perempuan</option>	
	</select>
	</div>
	
	<div class="form-group">
	<label for="jabatan_guru">Jabatan</label>
	<input type="text" class="form-control" id="jabatan_guru" name="jabatan_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="tahun_sertifikasi">Tahun Sertifikasi</label>
	<input type="text" class="form-control" id="tahun_sertifikasi" name="tahun_sertifikasi" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="tmpl_guru">Tempat Lahir</label>
	<input type="text" class="form-control" id="tl_guru" name="tl_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="tgl_guru">Tanggal Lahir</label>
	<input type="date" class="form-control" id="tgl_guru" name="tgl_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="nibu_guru">Nama Ibu</label>
	<input type="text" class="form-control" id="nibu_guru" name="nibu_guru" placeholder="">
	</div>
	
	</div></div></div>
	
	<div class="card">
		<div class="card-header">
				<a class="card-link" data-toggle="collapse" href="#menu2" aria-expanded="false" aria-controls="menu2">
					<span class="collapsed"><i class=""></i></span> 
					<span class="expanded"><i class=""></i></span> 
					SK Calon Pegawai
				</a>
			</div>
	<div id="menu2" class="collapse">
	<div class="card-body">
	
	<div class="form-group">
	<label for="golcapeg_guru">Golongan</label>
	<input type="text" class="form-control" id="golcapeg_guru" name="golcapeg_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="tmtcapeg_guru">Terhitung Mulai Tanggal</label>
	<input type="date" class="form-control" id="tmtcapeg_guru" name="tmtcapeg_guru" placeholder="">
	</div>
	
	</div></div></div>
	
	<div class="card">
		<div class="card-header">
				<a class="card-link" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menu3">
					<span class="collapsed"><i class=""></i></span> 
					<span class="expanded"><i class=""></i></span> 
					SK Terakhir
				</a>
			</div>
	<div id="menu3" class="collapse">
	<div class="card-body">
	
	<div class="form-group">
	<label for="golakhir_guru">Golongan</label>
	<input type="text" class="form-control" id="golakhir_guru" name="golakhir_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="tmtakhir_guru">Terhitung Mulai Tanggal</label>
	<input type="date" class="form-control" id="tmtakhir_guru" name="tmtakhir_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="mk_guru">Masa Kerja</label>
	<input type="text" class="form-control" id="mkt_guru" name="mkt_guru" placeholder="Tahun" style="width:45%">
	<input type="text" class="form-control" id="mkb_guru" name="mkb_guru" placeholder="Bulan" style="width:45%;margin:-38px 0rem 0rem 55%">
	</div>
	
	<div class="form-group">
	<label for="mb_guru">Mulai Bertugas di Sekolah Ini</label>
	<input type="date" class="form-control" id="mb_guru" name="mb_guru" placeholder="">
	</div>
	
	</div></div></div>
	
	<div class="card">
		<div class="card-header">
				<a class="card-link" data-toggle="collapse" href="#menu4" aria-expanded="false" aria-controls="menu4">
					<span class="collapsed"><i class=""></i></span> 
					<span class="expanded"><i class=""></i></span> 
					Riwayat Pendidikan
				</a>
			</div>
	<div id="menu4" class="collapse">
	<div class="card-body">
	
	<div class="form-group">
	<label for="pa_guru">Pendidikan Terakhir</label>
	<input type="text" class="form-control" id="pa_guru" name="pa_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="jp_guru">Jurusan Perkuliahan</label>
	<input type="text" class="form-control" id="jp_guru" name="jp_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="tt_guru">Tahun Tamat</label>
	<input type="text" class="form-control" id="tt_guru" name="tt_guru" placeholder="">
	</div>
	
	</div></div></div>
	
	<div class="card">
		<div class="card-header">
				<a class="card-link" data-toggle="collapse" href="#menu5" aria-expanded="false" aria-controls="menu5">
					<span class="collapsed"><i class=""></i></span> 
					<span class="expanded"><i class=""></i></span> 
					Lainnya
				</a>
			</div>
	<div id="menu5" class="collapse">
	<div class="card-body">
	
	<div class="form-group">
	<label for="jjm_guru">Jumlah Jam Mengajar Guru</label>
	<input type="text" class="form-control" id="jjm_guru" name="jjm_guru" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="ps_guru">Posisi di Sekolah</label>
	<input type="text" class="form-control" id="ps_guru" name="ps_guru" placeholder="">
	</div>
	
	</div></div></div>
	</div>
	
	
	</div>
	</div>
	<div class="modal-footer justify-content-between">
	<button type="submit" name="submit" class="btn btn-primary" style="margin-left:680px">Simpan</button>
	</div>
	</form>
	
	</div>
	
	</div>
</div>