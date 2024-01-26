<div class="modal fade" id="input_fasilitas" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Input Data Sarana dan Prasarana</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    
    <div class="modal-body">
    <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data"> 
      @csrf
    
    <div class="form-group">
    <label for="jenis_sarpras">Jenis Sarana dan Prasarana</label>
    <input type="text" class="form-control" id="jenis_sarpras" name="jenis_sarpras" placeholder="" required>
    </div>
    
    <div class="form-group">
    <label for="tgl_diterima">Tanggal Diterima</label>
    <input type="date" class="form-control" id="tgl_diterima" name="tgl_diterima" placeholder="" required>
    </div>
    
    <div class="form-group">
    <label for="jumlah_fasilitas">Jumlah</label>
    <input type="text" class="form-control" id="jumlah_fasilitas" name="jumlah_fasilitas" placeholder="" required>
    </div>

    <div class="form-group">
        <label for="jumlah" >Kondisi</label>
        <div name="jumlah" style="display: flex">
        <input type="text" class="form-control" id="kondisi_baik" name="kondisi_baik" placeholder="Baik" style="width:50%" required>
        <input type="text" class="form-control" id="kondisi_rusak" name="kondisi_rusak" placeholder="Rusak" style="width:50%" required>
        </div>
    </div>

    <div class="form-group">
        <label for="foto_fasilitas1"> Foto Fasilitas </label>
        <input type="file" class="form-control" id="foto_fasilitas1" name="foto_fasilitas1" placeholder="" >
    </div>
    
    </div>
    <div class="modal-footer justify-content-between">
    <button type="submit" class="btn btn-primary" style="margin-left:auto">Simpan</button>
    </div>
    </form>
    
    </div></div></div>