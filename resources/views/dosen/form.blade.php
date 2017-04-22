<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-4">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Masukan Nama"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">NIP</label>
	<div class="col-sm-4">
		{!! Form::text('nip',null,['class'=>'form-control','placeholder'=>"Masukan NIP"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Masukan Alamat"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Masukan Username"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}	
	</div>
</div>