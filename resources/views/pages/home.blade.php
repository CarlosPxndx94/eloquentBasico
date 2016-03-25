@extends('layout')


<div class="container">

	@section('content')
		<div class="jumbotron">
	        <div class="container">
	            <h1>Curso Eloquent Basico</h1>
	            <p>Texto</p>
	        </div>  
	    </div>

		<div class="container">
			<h1 class="page-header">Ultimos Usuarios Registrados</h1>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>E-mail</th>
						<th>Genero</th>
						<th>Biografia</th>
					</tr>
				</thead>
				<tbody>
					 @include('partials.list-users')
				</tbody>
			</table>
		</div>
	@stop
</div>		