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
                <th class="tg-3wr7">Jabatan<br></th>
                <th class="tg-3wr7">Status Pegawai<br></th>
                <th class="tg-3wr7">Tunjangan<br></th>
                <th class="tg-3wr7">Instansi<br></th>
                <th class="tg-3wr7">Jenis Kelamin<br></th>
              </tr>
              @foreach ($rekappegawai as $rekappegawai)
              <tr>
               <td class="tg-3wr7">{{$rekappegawai->nip_pegawai}}</td>
               <td class="tg-3wr7">{{$rekappegawai->nama}}</td>
               <td class="tg-3wr7">{{$rekappegawai->jabatan}}</td>
               <td class="tg-3wr7">{{$rekappegawai->status_pegawai}}</td>
               <td class="tg-3wr7">{{$rekappegawai->tunjangan}}</td>
               <td class="tg-3wr7">{{$rekappegawai->jabatannya->nama_instansi}}</td>
               <td class="tg-3wr7">{{$rekappegawai->jenis_kelamin}}</td>
              </tr>
              @endforeach
             
            </table>
        </body>
    </head>
</html>