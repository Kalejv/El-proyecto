@extends ('layouts.app')

@section ('title', 'Modificar')

@section ('content')
	{!! Form::model($club, ['route' => ['clubs.update', $club], 'method' => 'PUT', 'files' => true]) !!}
	<p></p>
	@include('clubs.form')

	{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
	{!! Form::close()!!}	
@endsection