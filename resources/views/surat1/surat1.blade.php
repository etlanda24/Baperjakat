<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font:tahoma; font-size: 11">
<div align="right">
	<b>
	ANAK LAMPIRAN I-a PERATURAN KEPALA BADAN<br>
	KEPEGAWAIAN NEGARA<br>
	NOMOR		: {{$surat1->nomor}}<br>
	TANGGAL	: {{$surat1->tanggal}}
	</b>
</div>
<br><br>
<center>
	<b><u>SURAT PERNYATAAN PELANTIKAN</u></b><br>
Nomor :  {{$surat1->nomor_surat}}<br><br>
</center>
<div style="margin-left:50px ">Yang bertandatangan di bawah ini :</div>
<table>
	<tbody>
		<tr>
			<td width="150">
				Nama<br>
				NIP<br>
				Pangkat/Gol.ruang<br>
				Jabatan<br>
				Unit Kerja<br>
				Instansi
			</td>
			<td width="7">
				:<br>
				:<br>
				:<br>
				:<br>
				:<br>
				:
			</td>
			<td>
				{{$surat1->lama->nama}}<br>
				{{$surat1->lama->nip_pegawai}}<br>
				{{$surat1->lama->golongan}}<br>
				{{$surat1->lama->jabatannya->nama}}<br>
				{{$surat1->lama->jabatannya->unit}}<br>
				{{$surat1->lama->jabatannya->nama_instansi}}
			</td>
		</tr>
	</tbody>
</table>
<div style="margin-left: 4px">
menyatakan dengan sesungguhnya, bahwa Pegawai Negeri Sipil tersebut di bawah ini :
</div><br>
<table>
	<tbody>
		<tr>
			<td width="150">
				Nama<br>
				NIP<br>
				Pangkat/Gol.ruang<br>
				Jabatan Lama<br>
				Eselon<br>
				Unit Kerja<br>
				Instansi
			</td>
			<td width="7">
				:<br>
				:<br>
				:<br>
				:<br>
				:<br>
				:<br>
				:
			</td>
			<td>
				{{$surat1->baru->nama}}<br>
				{{$surat1->baru->nip_pegawai}}<br>
				{{$surat1->baru->golongan}}<br>
				{{$surat1->baru->jabatannya->nama}}<br>
				{{$surat1->baru->jabatannya->eselon}}<br>
				{{$surat1->baru->jabatannya->unit}}<br>
				{{$surat1->baru->jabatannya->nama_instansi}}
			</td>
		</tr>
	</tbody>
</table><br>
<div align="justify" style="margin-left: 4px">
	Berdasarkan Keputusan Walikota Padang Nomor :{{$surat1->nomor_keputusan}}, tanggal {{$surat1->tanggal_keputusan}}, telah diangkat dalam jabatan  {{$surat1->lama->jabatannya->nama}} dan telah dilantik oleh Walikota Padang pada tanggal {{$surat1->tanggal_pelantikan}}.<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikianlah Surat Pernyataan Pelantikan ini diperbuat dengan sesungguhnya, dengan mengingat sumpah jabatan dan apabila dikemudian hari isi surat pernyataan ini ternyata tidak benar,yang mengakibatkan kerugian terhadap negara, maka saya bersedia menanggung kerugian tersebut.<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asli Surat pernyataan ini disampaikan kepada Kepala Kantor Pelayanan Perbendaharaan Negara/Pemegang Kas (PEKAS)/Kepala Biro/Kas Daerah Padang.
</div><br>
<table>
	<tbody>
		<tr>
			<td width="300">
				
			</td>
			<td align="center">
				Padang,        {{$surat1->tanggal_surat}}<br>
				{{$surat1->lama->jabatannya->nama}}<br>
				<br>
<br>
<br>
<br>
<br>
				{{$surat1->lama->nama}}<br>
				{{$surat1->lama->golongan}} ,NIP.{{$surat1->lama->nip_pegawai}}
			</td>
		</tr>
	</tbody>
</table>
<u><b>Tembusan  :</b></u><br>
1.Kepada Yth. Kepala Badan Kepegawaian Negara U.p Deputi Bidang Informasi Kepegawaian<br>
2.Kepada Yth. Kepala Badan Kepegawaian Daerah Kota Padang<br>
3.Kepada Yth. Pejabat Pembuat Daftar Gaji <br>
4.Kepada Pegawai yang bersangkutan untuk dipergunakan sebagaimana mestinya
</body>
</html>