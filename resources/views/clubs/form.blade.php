	<div class = "form-group">
		{!! Form::label('name','Nombre de Vedette')!!}
		{!! Form::text('name',null, ['class' =>'form-control']) !!}
	</div>
	<div class = "form-group">
		{!! Form::label('slug','Alias')!!}
		{!! Form::text('slug',null, ['class' =>'form-control']) !!}
	</div>
	<div class = "form-group">
		{!! Form::label('avatar','Foto de Perfil') !!}
		<p>{!! Form::file('avatar')!!}</p>	
	</div>	
	<div class="form-group">
		{!! Form::label('text','Descripción')!!}
		{!! Form::textarea('text',null, ['class' =>'form-control','rows'=>'3']) !!}
  </div> 