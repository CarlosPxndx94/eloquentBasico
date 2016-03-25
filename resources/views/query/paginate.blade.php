@extends('layout')

@section('content')
	<div class="container">

		<h1 class="page-header">{{ $title }}</h1>
		<p><strong>{{ $users->total() }}</strong> Registros <br>Pagina Actual <strong>{{ $users->currentPage() }} </strong> de <strong>{{ $users->lastPage() }}</strong></p>
		<table class="table table-hover table-striped">
			@include('partials.head-users')
			<tbody>
				 @include('partials.list-users')
			</tbody>
		</table>
		{!! $users->render() !!}
	</div>
@stop