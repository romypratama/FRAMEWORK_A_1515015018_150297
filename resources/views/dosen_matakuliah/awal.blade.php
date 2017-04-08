@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jadwal Dosen Mengajar</strong>
	<a href="{{url('dosen_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i>Jadwal Dosen</a>
	<div class="clearfix"></div>
</div>
	<table class="table">
		<thead><tr>
			<th>No.</th>
			<th>Nama dosen</th>
			<th>NIM dosen</th>
			<th>Nama Matakuliah</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach($semuadosen_matakuliah as $dosmat)
			<tr>
				<td>{{$x++ }}</td>
				<td>{{ $dosmat->dosen->nama or 'nama kosong'}}</td>
				<td>{{ $dosmat->dosen->nip or 'nip kosong'}}</td>
				<td>{{ $dosmat->matakuliah->title or 'matakuliah kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
	<a href="{{url('dosen_matakuliah/edit/'.$dosmat->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
	<a href  ="{{url('dosen_matakuliah/lihat/'.$dosmat->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
	<a href="{{url('dosen_matakuliah/hapus/'.$dosmat->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop