@extends ('layouts.app')

@section ('title', 'clubs')

@section ('content')
<p></p>
<a href="/clubs/create" class="btn btn-dark">Añadir +</a>
<div class="row">
	@foreach($clubs as $club)
		<div class= "col-sm">
		<div class="card " style="width: 18rem;margin-top: 50px;">
		<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px; " class="card-img-top rounded-circle mx-auto d-block" src="images/{{$club->avatar}}" alt="">
		<div class="card-body">
    			<div><h5 class="card-title text-center">{{$club->name}}</h5></div>
    			<div><p class="card-text"><b>Descripción: </b>{{$club->text}}</p></div>
    			<div class="text-center">
    			    <a href="/clubs/{{$club->slug}}" class="btn btn-dark">Ver más. . .</a>
    			</div>
 		</div>
	</div>
	</div>	
	@endforeach()
</div>
@endsection