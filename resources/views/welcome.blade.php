
    @extends('layouts.app')

    @section('content')
      <div class="container search">
        <div class="row">
        <div class="col-12">
          <h1>Kiermasz online <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
          </svg></h1>
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
        {{$books->links()}}
        @endforeach
        
        </div>

      </div> 
      @endsection

