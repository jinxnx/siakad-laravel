<div class="modal fade" id="edit_modal{{ $item->id_fasilitas }}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog ">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Edit Data Sarana dan Prasarana</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    
    <div class="modal-body">
    <form action="/fasilitas/{{ $item->id_fasilitas }}" method="POST" enctype="multipart/form-data"> 
      @csrf
      @method('PUT')
      <style>
        table {
          border: 2px solid black;
          border-collapse: collapse;
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
           width: 30%;
        }

        .value{
            padding-left: 5px;
        }

        </style>
 
 <table class="table-border" style="width: 100%">
     <tr>
         <th colspan="2" style="height: 50px; text-align: center; font-size: 30px">
             Detail Sarana dan Prasarana 
         </th>
     </tr>
     
     
     <tr>
         <td style="" class="title">Jenis Sarana dan Prasarana</td>
         <td class="value">
         <input type="text" class="form-control" id="jenis_sarpras" name="jenis_sarpras" value="{{ $item->jenis_sarpras }}" placeholder="{{ $item->jenis_sarpras }}" >
         </td>
     </tr>

     <tr>
         <td class="title">Tanggal Diterima</td>
         <td class="value">
          <input type="date" class="form-control" id="tgl_diterima" name="tgl_diterima" value="{{ $item->tgl_diterima }}" placeholder="{{ $item->tgl_diterima }}" data-date-format="DD MMMM YYYY" >
          </td>
     </tr>

     <tr>
        <td class="title">Jumlah Keseluruhan</td>
        <td class="value">
          <input type="text" class="form-control" id="jumlah_fasilitas" name="jumlah_fasilitas" value="{{ $item->jml_fasilitas }}" placeholder="{{ $item->jml_fasilitas }}" >
        </td>
     </tr>
 
     <tr>
         <td class="title">Kondisi Sarana dan Prasarana</td>
         <td class="value">
          <div style="display: flex">
          <label style="padding: 8px 10px 0px 5px"> Bagus </label>
          <input type="text" class="form-control" id="kondisi_baik" name="kondisi_baik" value="{{ $item->kondisi_baik }}" placeholder="{{ $item->kondisi_baik }}" >
          <label style="padding: 8px 10px 0px 5px"> Rusak </label>  
          <input type="text" class="form-control" id="kondisi_rusak" name="kondisi_rusak" value="{{ $item->kondisi_rusak }}" placeholder="{{ $item->kondisi_rusak }}" >
        </div>
        </td>
     </tr>

     <tr>
         <td colspan="2">
            <?php 
            $foto  = $item->foto;
            $img = base64_encode($foto);
           ?>
            <img src="data:image/jpeg;base64, {{ $img }}" width="100%"/>
         </td>      
     </tr>

    </table>
    
    <div class="modal-footer justify-content-between">
     <button type="submit" name="submit_data" class="btn btn-primary" style="margin-left:75%; width:16rem">Simpan</button>
    </div>
    
</form>
    
</div>
</div>
</div>
</div>