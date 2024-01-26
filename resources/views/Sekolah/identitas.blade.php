@extends('layout.main')

@section('content')


<br/>    
<section class="content">
<div class="card">
<h1 class="card-title" style="text-align:center; font-size:2rem"> Profile Sekolah </h1>

    <button onclick="edit_button()" name="edit_data" class="btn btn-primary" style="margin-left:auto; margin-right: 20px; width:10rem">Edit</button>
    <script>
        function edit_button() {
            var inputField = document.getElementsByClassName("form-control");
            for (let i = 0; i < inputField.length; i++) {
                inputField[i].disabled = false;
            }
            
            var showEdit = document.getElementById("submit");
                showEdit.hidden = false;
            
            var editForm = document.getElementById("mapForm");
                editForm.action = "{{ route('update_identitas') }}";
        }
    </script>

<div class="card-body" style="">

<form action="" method="post" id="mapForm">
    @csrf
<input hidden id="id_identitas" name="id_identitas" value="{{ $identitas_sekolah->id }}">
<div class="form-group">
    <label for="nama_siswa">Nama Sekolah</label>
    <input disabled type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="{{ $identitas_sekolah->nama_sekolah }}" value="{{ $identitas_sekolah->nama_sekolah }}">
</div>
        
<div class="form-group">
    <label for="nisn_siswa">NPSN</label>
    <input disabled type="text" class="form-control" id="npsn" name="npsn" placeholder="{{ $identitas_sekolah->npsn }}" value="{{ $identitas_sekolah->npsn }}">
</div>
        
<div class="form-group">
    <label for="nis_siswa">Akreditasi Sekolah</label>
    <input disabled type="text" class="form-control" id="akreditasi_sekolah" name="akreditasi_sekolah" placeholder="{{ $identitas_sekolah->akreditasi_sekolah }}" value="{{ $identitas_sekolah->akreditasi_sekolah }}">
</div>

<div class="form-group">
    <label for="nama_siswa">Nomor Telepon</label>
    <input disabled type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="{{ $identitas_sekolah->nomor_telepon }}" value="{{ $identitas_sekolah->nomor_telepon }}">
</div>
        
<div class="form-group">
    <label for="nisn_siswa">Kurikulum yang Digunakan</label>
    <input disabled type="text" class="form-control" id="kurikulum_digunakan" name="kurikulum_digunakan" placeholder="{{ $identitas_sekolah->kurikulum_digunakan }}" value="{{ $identitas_sekolah->kurikulum_digunakan }}">
</div>
        
<div class="form-group">
    <label for="nis_siswa">Website Sekolah</label>
    <input disabled type="text" class="form-control" id="website_sekolah" name="website_sekolah" placeholder="{{ $identitas_sekolah->website_sekolah }}" value="{{ $identitas_sekolah->website_sekolah }}">
</div>

<div class="form-group">
    <label for="nama_siswa">Visi</label>
    <input disabled type="text" class="form-control" id="visi" name="visi" placeholder="{{ $identitas_sekolah->visi }}" value="{{ $identitas_sekolah->visi }}">
</div>
        
<div class="form-group">
    <label for="nama_siswa">Misi</label>
    <textarea disabled class="form-control" id="misi" name="misi" rows="10" cols="50" placeholder="{{ $identitas_sekolah->misi }}" value=""> {{ $identitas_sekolah->misi }} </textarea>
</div>

<div class="form-group">
    <label for="nama_siswa">Alamat</label>
    <input disabled type="text" class="form-control" id="alamat" name="alamat" placeholder="{{ $identitas_sekolah->alamat }}" value="{{ $identitas_sekolah->alamat }}">
</div>
  
<div class="form-group">
    <label for="alamat">Alamat ( Embed )</label>
    <input disabled type="text" class="form-control" id="alamat_embed" name="alamat_embed" placeholder="{{ $identitas_sekolah->alamat_embed }}" value="{{ $identitas_sekolah->alamat_embed }}">    
</div>

@if(isset($htmlStructure))
    {!! $htmlStructure !!}
@endif

<div class="modal-footer justify-content-between">
    <button hidden type="submit" id="submit" class="btn btn-primary" style="margin-left:auto; margin-right: -15px; width:16rem">Simpan</button>
  </div>
</form>



</div>
</div>
<br/><br/><br/>

<footer class="main-footer">
    <strong>Sistem Informasi Akademik SMK Negeri 1 Sijunjung</a></strong>
    <div class="float-right d-none d-sm-inline-block">
        <b> &copy; UPGRISBA</b>
    </div>
</footer>
</div>

</section>

@endsection


<script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
 
<script src="{{ asset('template') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('template') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

