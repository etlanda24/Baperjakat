<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font:tahoma; font-size: 11">
<div align="right">
	<b>
	ANAK LAMPIRAN I-b PERATURAN KEPALA BADAN<br>
	KEPEGAWAIAN NEGARA<br>
	NOMOR		: {{$surat2->nomor}}<br>
	TANGGAL	: {{$surat2->tanggal}}
	</b>
</div>
<br><br>
<center>
	<b><u>SURAT PERNYATAAN MELAKSANAKAN TUGAS</u></b><br>
Nomor :  {{$surat2->nomor_surat}}<br><br>
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
				{{$surat2->lama->nama}}<br>
				{{$surat2->lama->nip_pegawai}}<br>
				{{$surat2->lama->golongan}}<br>
				{{$surat2->lama->jabatannya->nama}}<br>
				{{$surat2->lama->jabatannya->unit}}<br>
				{{$surat2->lama->jabatannya->nama_instansi}}
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
				{{$surat2->baru->nama}}<br>
				{{$surat2->baru->nip_pegawai}}<br>
				{{$surat2->baru->golongan}}<br>
				{{$surat2->baru->jabatannya->nama}}<br>
				{{$surat2->baru->jabatannya->eselon}}<br>
				{{$surat2->baru->jabatannya->unit}}<br>
				{{$surat2->baru->jabatannya->nama_instansi}}
			</td>
		</tr>
	</tbody>
</table><br>
<div align="justify" style="margin-left: 4px">
	Berdasarkan Keputusan Walikota Padang Nomor :{{$surat2->nomor_keputusan}}, tanggal {{$surat2->tanggal_keputusan}}, telah diangkat dalam jabatan {{$surat2->lama->jabatannya->nama}} dan telah dilantik oleh Walikota Padang pada tanggal {{$surat2->tanggal_pelantikan}} dan diberi tunjangan jabatan struktural Eselon IV.A sebesar Rp.{{$surat2->tunjangan}} sebulan terhitung mulai tanggal {{$surat2->tanggal_mulai}}.<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikianlah Surat Pernyataan Melaksanakan Tugas ini diperbuat dengan sesungguhnya, dengan mengingat sumpah jabatan dan apabila dikemudian hari isi surat pernyataan ini ternyata tidak benar, yang mengakibatkan kerugian terhadap negara, maka saya bersedia menanggung kerugian tersebut.<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asli Surat pernyataan ini disampaikan kepada Kepala Kantor Pelayanan Perbendaharaan Negara/Pemegang Kas (PEKAS)/Kepala Biro/Kas Daerah Padang.
</div><br>
<table>
	<tbody>
		<tr>
			<td width="300">
				
			</td>
			<td align="center">
				Padang,        {{$surat2->tanggal_surat}}<br>
				{{$surat2->lama->jabatannya->nama}}<br><br>
<br>
<br>
<br>
<br>
				{{$surat2->lama->nama}}<br>
				{{$surat2->lama->golongan}} ,NIP.{{$surat2->lama->nip_pegawai}}
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