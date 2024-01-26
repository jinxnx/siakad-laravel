<div class="modal fade" id="editmodal-sm{{ $item->id_kelas }}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-default">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Edit Kelas</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
    <form action="" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
    <div class="form-group">
    <label for="nama_kelas">Kelas</label>
    <input type="text" class="form-control" id="enama_kelas" name="enama_kelas" placeholder="{{ $item->nama_kelas }}" value="{{ $item->nama_kelas }}">
    </div>
    
    <div class="form-group">
    <label for="wali_kelas">Wali Kelas</label>
    <select class="form-control" id="ewali_kelas" name="ewali_kelas">
    @foreach ($wakel as $item) 
      <option value="" selected hidden></option>
      <option value="{{ $item->id_guru }}">{{ $item->nama }}</option>
    @endforeach
    </select>
    </div>
    
    <div class="modal-footer justify-content-between">
    <button type="submit" name="submit_kelas" class="btn btn-primary" style="margin-left:380px">Simpan</button>
    </div>
    </form>
    </div>