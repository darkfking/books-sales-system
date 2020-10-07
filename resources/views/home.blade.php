@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <h2>Moje ogłoszenia</h2>

      @if (session('status'))
      <br>
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
      @endif

        @foreach ($mybooks as $book)
        <div class="col-12 mt-5">
          <div class="card text-right shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <div class="text-center float-left">
              <img src="{{url('uploads/'.$book->filename)}}" class="rounded img-fluid" alt="book" width="200px" height="200px">
              </div>
              <h5 class="card-title">{{$book->title}}</h5>
              <p class="card-text">
                {{$book->description}}
              <h5>Cena: {{$book->price}}</h5>
              </p>
            <a href="{{route('books.show', $book->id)}}" class="btn btn-primary">Zobacz</a>
            <a href="{{route('books.edit', $book->id)}}" class="btn btn-primary">Edytuj</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
