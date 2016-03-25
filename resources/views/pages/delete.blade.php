@extends('layout')

	@section('content')
		<div class="container">
			<p class="alert alert-success">
				El Ususario ha sido Eliminado
				<a href="{{ route('home') }}">Home</a>
			</p>
		</div>	
	@stop
	