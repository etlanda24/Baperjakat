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
                <center><h2>Data Riwayat Jabatan</h2></center>  
            </div>
            
            <br>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">Nip Pegawai<br></th>
                <th class="tg-3wr7">Nama Pegawai<br></th>
                <th class="tg-3wr7">Jenis Tempat Bekerja<br></th>
                <th class="tg-3wr7">Jenis Jabatan<br></th>
                <th class="tg-3wr7">Unit Kerja<br></th>
                <th class="tg-3wr7">Jabatan<br></th>
                <th class="tg-3wr7">Periode<br></th>
              </tr>
              @foreach ($riwayatjabatan as $riwayatjabatan)
              <tr>
               <td class="tg-3wr7">{{$riwayatjabatan->nip_pegawai}}</td>
               <td class="tg-3wr7">{{$riwayatjabatan->nama}}</td>
               <td class="tg-3wr7">{{$riwayatjabatan->jenis_tempat_bekerja}}</td>
               <td class="tg-3wr7">{{$riwayatjabatan->jenis_jabatan}}</td>
               <td class="tg-3wr7">{{$riwayatjabatan->unit_kerja}}</td>
               <td class="tg-3wr7">{{$riwayatjabatan->jabatan}}</td>
               <td class="tg-3wr7">{{$riwayatjabatan->periode}}</td>
              </tr>
              @endforeach
             
            </table>
        </body>
    </head>
</html>