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
                <center><h2>Data Riwayat Diklat</h2></center>  
            </div>
            
            <br>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">Nama Pegawai</th>
                <th class="tg-3wr7">Jenis Diklat</th>
                <th class="tg-3wr7">Nama Diklat</th>
                <th class="tg-3wr7">Periode</th>
                <th class="tg-3wr7">Tempat Diklat</th>
                <th class="tg-3wr7">Tanggal Mulai</th>
                <th class="tg-3wr7">Tanggal Selesai</th>
              </tr>
              @foreach ($riwayatdiklat as $riwayatdiklat)
              <tr>
               <td class="tg-3wr7">{{$riwayatdiklat->nama}}</td>
               <td class="tg-3wr7">{{$riwayatdiklat->jenis_diklat}}</td>
               <td class="tg-3wr7">{{$riwayatdiklat->nama_diklat}}</td>
               <td class="tg-3wr7">{{$riwayatdiklat->periode}}</td>
               <td class="tg-3wr7">{{$riwayatdiklat->tempat_diklat}}</td>
               <td class="tg-3wr7">{{$riwayatdiklat->tanggal_mulai}}</td>
               <td class="tg-3wr7">{{$riwayatdiklat->tanggal_selesai}}</td>
              </tr>
              @endforeach
             
            </table>
        </body>
    </head>
</html>