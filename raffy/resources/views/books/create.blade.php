@extends('books.layout')

@section('content')

 <h1 class="text-center">Agregar Libros</h1>
 <hr>

 	<div class="container">
 		<form action="{{route('books.store')}}" method="POST">
 		@csrf
 			<div class="row">
 					<div class="col-md-12">
 						<div class="form-group">
 							
 							<strong>Titulo:</strong>
 						<input type="text" name="title" class="form-control" placeholder="Titulo del Libro">
 						</div>	


 					</div>
 					<div class="col-md-12">
 						<div class="form-group">
 							 <strong>Descripcion:</strong>
 							<textarea class="form-control" name="description" placeholder="Reseña"></textarea>
 						</div>

 					</div>
 					<div class="col-md-12 text-center">
 						<button type="submit" class="btn btn-primary">Enviar</button>

 					</div>	


 			</div>



 	</form>



 	</div>

 	


@endsection