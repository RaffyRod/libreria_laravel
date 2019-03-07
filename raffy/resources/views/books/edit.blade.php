@extends('books.layout')

@section('content')

 <h1 class="text-center">Actualizar Libros</h1>
 <hr>

 	<div class="container">
 		<form action="{{ route('books.update',$book->id) }}" method="POST">
 		@csrf
 		@method('PUT')
 			<div class="row">
 					<div class="col-md-12">
 						<div class="form-group">
 							
 							<strong>Titulo:</strong>
 						<input type="text" name="title" value="{{$book->title}}" class="form-control" placeholder="Titulo del Libro">
 						</div>	


 					</div>
 					<div class="col-md-12">
 						<div class="form-group">
 							 <strong>Descripcion:</strong>
 							<textarea class="form-control" name="description" placeholder="Reseña">{{$book->description}}</textarea>
 						</div>

 					</div>
 					<div class="col-md-12 text-center">
 						<button type="submit" class="btn btn-primary">Enviar</button>

 					</div>	


 			</div>



 	</form>



 	</div>

 	


@endsection