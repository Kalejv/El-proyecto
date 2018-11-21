@extends ('layouts.app')

@section ('title', 'Crear')

@section ('content')
	@include ('common.errors')
	{!! Form::open(['route' => 'clubs.store', 'method' => 'POST', 'files' => true]) !!}
	<p></p>
	@include ('clubs.form')
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
	{!! Form::close()!!}
		
@endsection