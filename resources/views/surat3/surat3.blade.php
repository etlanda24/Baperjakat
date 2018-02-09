<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font:tahoma; font-size: 11">
<div align="right">
	<b>
	ANAK LAMPIRAN I-c PERATURAN KEPALA BADAN<br>
	KEPEGAWAIAN NEGARA<br>
	NOMOR		: {{$surat3->nomor}}<br>
	TANGGAL	: {{$surat3->tanggal}}
	</b>
</div>
<br><br>
<center>
	<b><u>SURAT PERNYATAAN PELANTIKAN</u></b><br>
Nomor :  {{$surat3->nomor_surat}}<br><br>
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
				{{$surat3->lama->nama}}<br>
				{{$surat3->lama->nip_pegawai}}<br>
				{{$surat3->lama->golongan}}<br>
				{{$surat3->lama->jabatannya->nama}}<br>
				{{$surat3->lama->jabatannya->unit}}<br>
				{{$surat3->lama->jabatannya->nama_instansi}}
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
				{{$surat3->baru->nama}}<br>
				{{$surat3->baru->nip_pegawai}}<br>
				{{$surat3->baru->golongan}}<br>
				{{$surat3->baru->jabatannya->nama}}<br>
				{{$surat3->baru->jabatannya->eselon}}<br>
				{{$surat3->baru->jabatannya->unit}}<br>
				{{$surat3->baru->jabatannya->nama_instansi}}
			</td>
		</tr>
	</tbody>
</table><br>
<div align="justify" style="margin-left: 4px">
	Terhitung mulai tanggal {{$surat3->tanggal_mulai}} telah menduduki jabatan sebagai  {{$surat3->lama->jabatannya->nama}} pada {{$surat3->lama->jabatannya->unit}} Kota Padang (Eselon IV.A) berdasarkan Keputusan Walikota Padang Nomor :{{$surat3->nomor_keputusan}}, tanggal {{$surat3->tanggal_keputusan}}.<br>
	Berdasarkan Surat Edaran Dirjen Anggaran No.{{$surat3->tanggal_mulai}} tanggal {{$surat3->tanggal_pelantikan}} sdri. {{$surat3->baru->nama}} berhak menerima tunjangan jabatan struktural Eselon IV.A sebesar Rp.{{$surat3->tunjangan}} sebulan terhitung mulai tanggal {{$surat3->tanggal_mulai}}. <br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikianlah Surat Pernyataan Telah Menduduki Jabatan ini diperbuat dengan sesungguhnya, dengan mengingat sumpah jabatan dan apabila dikemudian hari isi surat pernyataan ini ternyata tidak benar, yang mengakibatkan kerugian terhadap negara, maka saya bersedia menanggung kerugian tersebut.<br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asli Surat pernyataan ini disampaikan kepada Kepala Kantor Pelayanan Perbendaharaan Negara/Pemegang Kas (PEKAS)/Kepala Biro/Kas Daerah Padang.
</div><br>
<table>
	<tbody>
		<tr>
			<td width="300">
				
			</td>
			<td align="center">
				Padang,        {{$surat3->tanggal_surat}}<br>
				{{$surat3->lama->jabatannya->nama}}<br><br>
<br>
<br>
<br>
<br>
				{{$surat3->lama->nama}}<br>
				{{$surat3->lama->golongan}} ,NIP.{{$surat3->lama->nip_pegawai}}
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