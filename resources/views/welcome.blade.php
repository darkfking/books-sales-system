
    @extends('layouts.app')

    @section('content')
      <div class="container search">
        <div class="row">
        <div class="col-12">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg>
              </span>
            </div>
            <input type="text" id="myFilter" onkeyup="myFunction()" class="form-control input-size search-color" required placeholder="Wpisz tytuł lub jego część...">
            
          </div>
        </div>
        </div>
        
        <div class="row" id="myItems">
        @foreach ($books as $book)
        <div class="col-12 mt-5">
          <div class="card text-right shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <div class="text-center float-left">
              <img src="{{url('uploads/'.$book->filename)}}" class="rounded img-fluid" alt="book" width="200px" height="200px">
              </div>
              <h5 class="card-title">{{$book->title}}</h5>
              <p class="card-text">
                
              <h5>{{$book->price}} zł</h5>
              </p>
            <a href="{{route('books.show', $book->id)}}" class="btn btn-primary">Zobacz</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>

      </div> 
      @endsection

