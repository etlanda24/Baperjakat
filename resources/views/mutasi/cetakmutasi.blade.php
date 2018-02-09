<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Laporan Member</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
          <div style="font-family:Arial; font-size:12px;">
                <center><h2>Data Rekap Pegawai Periode {{$periode}}</h2></center>  
            </div>
            
            <br>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">Nip Pegawai<br></th>
                <th class="tg-3wr7">Nama Pegawai<br></th>

                <th class="tg-3wr7">Jabatan Lama<br></th>
                <th class="tg-3wr7">Nomor SK Lama<br></th>
                <th class="tg-3wr7">Tanggal SK Lama<br></th>
                <th class="tg-3wr7">Instansi Lama<br></th>
                <th class="tg-3wr7">Golongan Lama<br></th>
                <th class="tg-3wr7">TMT Jabatan Lama<br></th>

                <th class="tg-3wr7">Jabatan Baru<br></th>
                <th class="tg-3wr7">Nomor SK Baru<br></th>
                <th class="tg-3wr7">Tanggal SK Baru<br></th>
                <th class="tg-3wr7">Instansi Baru<br></th>
                <th class="tg-3wr7">Golongan Baru<br></th>
                <th class="tg-3wr7">TMT Jabatan Baru<br></th>
              </tr>
              @foreach ($mutasi as $mutasi)
              <tr>
               <td class="tg-3wr7">{{$mutasi->nip_pegawai}}</td>
               <td class="tg-3wr7">{{$mutasi->nama_pegawai}}</td>

               <td class="tg-3wr7">{{$mutasi->nama_jabatan_lama}}</td>
               <td class="tg-3wr7">{{$mutasi->no_sk_lama}}</td>
               <td class="tg-3wr7">{{$mutasi->tanggal_sk_lama}}</td>
               <td class="tg-3wr7">{{$mutasi->instansi_lama}}</td>
               <td class="tg-3wr7">{{$mutasi->golongan_lama}}</td>
               <td class="tg-3wr7">{{$mutasi->tmt_jabatan_lama}}</td>

               <td class="tg-3wr7">{{$mutasi->nama_jabatan_baru}}</td>
               <td class="tg-3wr7">{{$mutasi->no_sk_baru}}</td>
               <td class="tg-3wr7">{{$mutasi->tanggal_sk_baru}}</td>
               <td class="tg-3wr7">{{$mutasi->instansi_baru}}</td>
               <td class="tg-3wr7">{{$mutasi->golongan_baru}}</td>
               <td class="tg-3wr7">{{$mutasi->tmt_jabatan_baru}}</td>
              </tr>
              @endforeach
             
            </table>
        </body>
    </head>
</html>