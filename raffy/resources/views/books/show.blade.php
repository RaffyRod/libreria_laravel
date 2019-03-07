@extends('books.layout')

@section('content')
<br>
<br>
 <div class="container">
 	
<div class="card">
  <div class="card-header">
    <h2>{{$book->title}}</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$book->description}}.</p>
      <footer class="blockquote-footer">{{$book->created_at}} </footer>
    </blockquote>
  </div>
</div>





 </div>
 	


@endsection