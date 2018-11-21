@extends ('layouts.app')

@section ('title', 'Cliente')

@section ('content')
		@include ('common.success')
		<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px; " class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$club->avatar}}" alt="">
		<div class="text-center">
			<h5 class="card-title">{{$club->name}}</h5>
			<p> {{$club->text}}</p>
			<a href="/clubs/{{$club->slug}}/edit" class="btn btn-primary">Editar</a>
			{!! Form::open(['route' => ['clubs.destroy', $club->slug], 'method' => 'DELETE']) !!}
			<p></p>
			{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
			{!! Form::close()!!}
			<p></p>
			<a href="/pago" class="btn btn-primary">Pagar</a>

			<a href="/clubs" class="btn btn-warning">Volver</a>
		</div>
@endsection