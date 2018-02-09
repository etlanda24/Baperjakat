<!DOCTYPE html>
<html>

<?php
if (!function_exists('format_indo')) {
  function format_indo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1]. " ". $tahun;
    return($result);
}
}
?>

<head>
	<title></title>
	<style>
p {
    line-height: 10%;
    font-family: tahoma;
    font-size: 15px;
}

</style>
</head>
<body style="font:tahoma; font-size: 11">
<center>
	<img src="images/garuda.png" width="70px"><br>
	<p>WALIKOTA PADANG</p>
	<p>PROVINSI SUMATERA BARAT</p><br>
	<p>PETIKAN</p><br>
	<p>KEPUTUSAN WALIKOTA PADANG</p>
	<p>NOMOR : {{$suratsk->nomor_surat}}</p><br>
	<p>TENTANG</p>
	<p>PENGANGKATAN, PEMINDAHAN DAN PEMBERHENTIAN PNS</p>
	<p>DALAM DAN DARI JABATAN STRUKTURAN PENGAWAS (ESELON IV)</p>
	<p>KECAMATAN DAN KELURAHAN DI LINGKUNGAN PEMERINTAHAN KOTA PADANG</p><br>
	<p>WALIKOTA PADANG</p>


</center>

<table>
	<tbody> 
		<tr>
			<td width="90">
				<b>Menimbang</b>
			</td>
			<td>
				: dst;
			</td>
		</tr>
		<tr>
			<td width="90">
				<b>Mengingat</b>
			</td>
			<td>
				: dst;
			</td>
		</tr>
	</tbody>
</table>
<br>
<center><b>MEMUTUSKAN</b></center>

<table>
	<tbody> 
		<tr>
			<td width="90">
				<b>Menetapkan</b>
			</td>
			<td>
				: 
			</td>
		</tr>
		<tr>
			<td width="90">
				<b>KESATU</b>
			</td>
			<td width="7">
				: 	
			</td>
			<td>
				Memperhatikan Berita Acara Baperjakat Nomor {{$suratsk->nomor_berita_acara}} tanggal {{format_indo($suratsk->tanggal_berita_acara)}}, bahwa Pegawai Negeri Sipil nomor urut : {{$suratsk->nomor_urut}}.
			</td>
		</tr>
	</tbody>
</table>


<table align="center">
	<tbody> 
		<tr>
			<td width="90">
				Nama
			</td>
			<td width="7">
				: 	
			</td>
			<td>
				<b>{{$suratsk->nama_pegawai}}</b>
			</td>
		</tr>
		<tr>
			<td width="90">
				NIP
			</td>
			<td width="7">
				: 	
			</td>
			<td>
				{{$suratsk->nip_pegawai}}
			</td>
		</tr>
		<tr>
			<td width="90">
				Pangkat / Gol
			</td>
			<td width="7">
				: 	
			</td>
			<td>
				{{$suratsk->golongan_pegawai}}
			</td>
		</tr>
	</tbody>
</table>
<table>
	<tbody>
		<tr>
			<td width="90">
				
			</td>
			<td width="7">
				
			</td>
			<td>
				diberhentikan dengan hormat dari jabatan {{$suratsk->jabatan_lama}}.
			</td>			
		</tr>
		<tr>
			<td width="90">
				<b>KEDUA</b>
			</td>
			<td width="7">
				: 	
			</td>
			<td>
				Mengangkat Pegawai Negeri Sipil sebagaimana dimaksud pada diktum Kesatu tersebut sebagai {{$suratsk->jabatan_baru}}.
			</td>
		</tr>
		<tr>
			<td width="90">
				<b>KETIGA</b>
			</td>
			<td width="7">
				: 	
			</td>
			<td>
				Kepada Pegawai Negeri Sipil sebagaimana dimaksud pada diktum Kesatu tersebut selama memangku jabatan sebagaimana dimaksud pada diktum Kedua tersebut diberikan tunjangan sesuai ketentuan yang berlaku
			</td>
		</tr>
		<tr>
			<td width="90">
				<b>KEEMPAT</b>
			</td>
			<td width="7">
				: 	
			</td>
			<td>
				Keputusan ini berlaku terhitung tanggal {{$suratsk->tanggal_penetapan}}.
			</td>
		</tr>
	</tbody>
</table><br>
<table>
	<tbody>
		<tr>
			<td width="97">
				
			</td>
			<td width="7">
				<b>PETIKAN</b>
			</td>
			<td width="7">
				: 
			</td>
			<td>
				Surat keputusan ini diberikan kepada yang bersangkutan untuk diketahui dan dipergunakan sebagaimana mestinya.
			</td>
		</tr>
	</tbody>
</table>
<br>
<table>
	<tbody>
		<tr>
			<td width="250" align="center">
				Untuk Petikan yang sah <br>
				sesuai dengan aslinya :
			</td>
			<td width="250" align="center">
				Di tetapkan di Padang,<br>
				Pada tanggal {{$suratsk->tanggal_surat}}
			</td>
		</tr>
		<tr><td></td><td></td></tr>
		<tr>
			<td width="250" align="center">
				<b>SEKRETARIS DAERAH KOTA PADANG</b>
				<br>
				<br>
				<br>
				<br style="line-height: 35px">
				<b>{{$suratsk->nama_sekda}}</b>
				<br>
				NIP. {{$suratsk->nip_sekda}}
			</td>
			<td width="250" align="center">
				<b>WALIKOTA PADANG</b>
				<br>
				<br>
				<br>
				<br style="line-height: 35px">
				<b>{{$suratsk->nama_walikota}}</b>
				<br>
				NIP. {{$suratsk->nip_walikota}}
				
			</td>
		</tr>
		
	</tbody>
</table>
</body>
</html>