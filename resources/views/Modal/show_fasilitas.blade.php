<div class="modal fade" id="show_fasilitas{{ $item->id_fasilitas }}">
    <div class="modal-dialog">
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
                <td class="value"> {{ $item->jenis_sarpras }} </td>
            
            </tr>
    
            <tr>
                <td class="title">Tanggal Diterima</td>
            <td class="value"> {{ \Carbon\Carbon::parse($item->tgl_diterima)->format('d-m-Y') }} </td>

            </tr>
    
            <tr>
               <td class="title">Jumlah Keseluruhan</td>
               <td class="value">{{ $item->jml_fasilitas }}</td>
            </tr>
        
            <tr>
                <td class="title">Kondisi Sarana dan Prasarana</td>
                <td class="value"> {{ $item->kondisi_baik }} Bagus {{ $item->kondisi_rusak }} Rusak </td>
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
        <button data-dismiss="modal" class="btn btn-primary" style="margin-left:auto; width:15%"> Tutup </button>
    </div>
    
    </div>   
    </div>   
    </div>
    </div>