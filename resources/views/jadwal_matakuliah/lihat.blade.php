@extends('master')
@section('container')

<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{ url('jadwal_matakuliah') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Jadwal Mahasiswa</strong>
	
	</div>
	<table class="table">
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwalMatakuliah->mahasiswa->nama }}</td>
		</tr>
		<tr>
			<td>NIM Mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwalMatakuliah->mahasiswa->nim }}</td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td>{{ $jadwalMatakuliah->dosen_matakuliah->dosen->nama }}</td>
		</tr>
		<tr>
			<td>NIP Dosen</td>
			<td>:</td>
			<td>{{ $jadwalMatakuliah->dosen_matakuliah->dosen->nip  }}</td>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td>:</td>
			<td>{{ $jadwalMatakuliah->dosen_matakuliah->matakuliah->title }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$matakuliah->created_at }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$matakuliah->updated_at }}</td>
		</tr>
	</table>
</div>
@stop