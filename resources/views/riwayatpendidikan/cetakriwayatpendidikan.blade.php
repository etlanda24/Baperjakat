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
                <center><h2>Data Riwayat Pendidikan</h2></center>  
            </div>
            
            <br>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">Nip Pegawai</th>
                <th class="tg-3wr7">Tingkat</th>
                <th class="tg-3wr7">Nama Tempat</th>
                <th class="tg-3wr7">Jurusan</th>
                <th class="tg-3wr7">No Ijazah</th>
                <th class="tg-3wr7">Tanggal Ijazah</th>
              </tr>
              @foreach ($riwayatpendidikan as $riwayatpendidikan)
              <tr>
               <td class="tg-3wr7">{{$riwayatpendidikan->nip_pegawai}}</td>
               <td class="tg-3wr7">{{$riwayatpendidikan->tingkat_pendidikan}}</td>
               <td class="tg-3wr7">{{$riwayatpendidikan->nama_tempat}}</td>
               <td class="tg-3wr7">{{$riwayatpendidikan->jurusan}}</td>
               <td class="tg-3wr7">{{$riwayatpendidikan->no_ijazah}}</td>
               <td class="tg-3wr7">{{$riwayatpendidikan->tgl_ijazah}}</td>
              </tr>
              @endforeach
             
            </table>
        </body>
    </head>
</html>