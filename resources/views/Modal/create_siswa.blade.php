<div class="modal fade" id="input_siswa">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
	<div class="modal-header">
	<h4 class="modal-title">Input Data Siswa</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
	</div>
	<div class="modal-body">
	
	<form action="{{ route('datasiswa.store') }}" method="POST" enctype="multipart/form-data"> 
		@csrf
	<div class="box1" style="width:150px; height:200px; margin:2rem 0rem 0rem 1rem;">
	<img  style="width: 150px; height:200px" id="foto_siswa" name="foto_siswa"/>
	<div class="form-group">
	<div class="input-group">
	<div class="custom-file">
	<input type="file" class="custom-file-input" id="inputfoto_siswa" name="inputfoto_siswa" onchange="PreviewImage();" required oninvalid="this.setCustomValidity('Silahkan Pilih Foto Terlebih Dahulu')" oninput="this.setCustomValidity('')">
	<label class="custom-file-label" for="inputfoto_siswa"></label>
	</div></div></div>
	
	<script type="text/javascript">
	function PreviewImage() {
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("inputfoto_siswa").files[0]);
	oFReader.onload = function (oFREvent)
	 {
		document.getElementById("foto_siswa").src = oFREvent.target.result;
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
					Informasi Pribadi Siswa
				</a>
			</div>
	
	<div id="menu1" class="expand">
	<div class="card-body">
	
	<div class="form-group">
	<label for="nama_siswa">Nama</label>
	<input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="nisn_siswa">NISN</label>
	<input type="text" class="form-control" id="nisn_siswa" name="nisn_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="nis_siswa">NIS</label>
	<input type="text" class="form-control" id="nis_siswa" name="nis_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="kelas_siswa">Kelas</label>
	<select class="form-control" name="kelas_siswa" id="kelas_siswa" placeholder="">
	@foreach ($kelas as $item) 
	  <option value="{{ $item->id_kelas }}">{{ $item->nama_kelas }}</option>
	@endforeach
	</select>
	</div>
	
	<div class="form-group">
	<label for="jk_siswa">Jenis Kelamin</label>
	<select type="option" class="form-control" id="jk_siswa" name="jk_siswa" placeholder="">
		<option value="L">Laki-Laki</option>
		<option value="P">Perempuan</option>	
	</select>
	</div>
	
	<div class="form-group">
	<label for="tl_siswa">Tempat Lahir</label>
	<input type="text" class="form-control" id="tl_siswa" name="tl_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="tgl_siswa">Tanggal Lahir</label>
	<input type="date" class="form-control" id="tgl_siswa" name="tgl_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="alamat_siswa">Alamat</label>
	<input type="text" class="form-control" id="alamat_siswa" name="alamat_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="agama_siswa">Agama</label>
	<input type="text" class="form-control" id="agama_siswa" name="agama_siswa" placeholder="">
	</div>
	
	</div></div></div>
	
	<div class="card">
		<div class="card-header">
				<a class="card-link" data-toggle="collapse" href="#menu2" aria-expanded="false" aria-controls="menu2">
					<span class="collapsed"><i class=""></i></span> 
					<span class="expanded"><i class=""></i></span> 
					Informasi Orang Tua Siswa
				</a>
			</div>
	<div id="menu2" class="collapse">
	<div class="card-body">
	
	<div class="form-group">
	<label for="nayah_siswa">Nama Ayah</label>
	<input type="text" class="form-control" id="nayah_siswa" name="nayah_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="nibu_siswa">Nama Ibu</label>
	<input type="text" class="form-control" id="nibu_siswa" name="nibu_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="payah_siswa">Pekerjaan Ayah</label>
	<input type="text" class="form-control" id="payah_siswa" name="payah_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="pibu_siswa">Pekerjaan Ibu</label>
	<input type="text" class="form-control" id="pibu_siswa" name="pibu_siswa" placeholder="">
	</div>
	
	</div>
	</div>
	</div>
	
	<div class="card">
		<div class="card-header">
				<a class="card-link" data-toggle="collapse" href="#menu3" aria-expanded="false" aria-controls="menu3">
					<span class="collapsed"><i class=""></i></span> 
					<span class="expanded"><i class=""></i></span> 
					Informasi Asal Sekolah
				</a>
			</div>
	<div id="menu3" class="collapse">
	<div class="card-body">
	
	<div class="form-group">
	<label for="asekolah_siswa">Asal Sekolah</label>
	<input type="text" class="form-control" id="asekolah_siswa" name="asekolah_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="nopes_siswa">Nomor Peserta</label>
	<input type="text" class="form-control" id="nopes_siswa" name="nopes_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="nijazah_siswa">Nomor Ijazah</label>
	<input type="text" class="form-control" id="nijazah_siswa" name="nijazah_siswa" placeholder="">
	</div>
	
	<div class="form-group">
	<label for="nskhun_siswa">No SKHUN</label>
	<input type="text" class="form-control" id="nskhun_siswa" name="nskhun_siswa" placeholder="">
	</div>
	
	</div></div></div>
	</div>
	
	</div>
	</div>
	<div class="modal-footer justify-content-between">
	<button type="submit" name="submit_data" class="btn btn-primary" style="margin-left:680px">Simpan</button>
	</div>
	</form>
	
	</div>
	
	</div>