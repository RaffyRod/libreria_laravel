@extends('books.layout')

@section('content')

<h1 class="text-center">Libros</h1>

<div class="container"> 
		<a class="btn btn-info mb-3"  href="{{route('books.create')}}">Agregar Libros &nbsp; <i class="fas fa-book">  </i></a>
		
		@if (Session::has ('message'))
		<div class="alert alert-info">{{Session::get('message')}}</div>
		@endif

	<table class="table table-bordered">
		<thead class = "thead-light">
			<tr>
				<th scope="col">Codigo</th>
				<th scope="col">Titulo</th>
				<th scope="col">Reseña</th>
				<th scope="col">Acciones</th>

			</tr>

		</thead>
		<tbody>
			@foreach($books as $book)

				<tr>
					<th scope="row">{{ $book->id }}</th>
					<td> <a href="{{route('books.show',$book->id)}}">{{ $book->title }}</a></td>
					<td>{{ $book->description }}</td>
					<td> <a class="btn-sm btn-info botoninput" href="{{route('books.edit',$book->id)}}"><i class="far fa-edit"></i></a>
						<form action="{{route('books.destroy',$book->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn-sm btn-danger mt-3"  onclick="return confirm('Quiere borrar este registro?')"><i class="far fa-trash-alt"></i></button>


					</form>
				</td>
					
				</tr>

			@endforeach

		</tbody>
	</table>
	{{ $books->links() }}  
</div>




@endsection