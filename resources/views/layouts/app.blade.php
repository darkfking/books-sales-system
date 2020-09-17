<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kiermasz ZSW</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">     
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .navbar {
    background-color: #2F3542 !important;
    height: 90px !important;
  }
  
  .search {
    margin-top: 100px;
  }
  .input-size {
    height: 50px;
    border: none !important;
    border-bottom: 1px solid #2F3542 !important;
  }
  .search-color {
    background-color: #FAFAFA !important;
  }
  .form-color {
    background-color:white !important;
  }

  .add-form:focus {
    border-color: #2F3542 !important;
    box-shadow: none;
    outline: 0;
  }

  .input-size:focus {
    border-color: rgba(249, 231, 13, 0.8);
    box-shadow: none;
    outline: 0 none;
  }
  .input-group-text {
    border: none !important;
    background-color: #FAFAFA !important;
    border-bottom: 1px solid #2F3542 !important;
  }
  .btn {
    background-color: #2F3542 !important;
    border: none !important;
  }
  body {
    background-color: #FAFAFA;
  }
  .card:hover {
      border: 1px solid #2F3542;
  }
  .nav-btn {
      background-color: #BD2525 !important;
      margin-left: 20px;
  }

  .nav-btn:hover {
      background-color: #A90202 !important;
  }
  .nav-btn:focus {
    box-shadow: none;
    outline: 0;
  }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark navedit">
           <img src="{{asset('logo.png')}}" alt="" class="ml-5">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="">Zaloguj się</a>
                    </li>
                    @endguest
                    @auth 
                    <li class="nav-item">
                        <a href="{{route('books.create')}}" class="btn btn-primary nav-btn">Dodaj ogłoszenie</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="btn btn-primary nav-btn">Moje ogłoszenia</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary nav-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Wyloguj') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> 
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>

        <main class="py-4" style="margin-top: 70px;">
            @yield('content')
        </main>
        <footer class="container">
            <hr>
            <p>&copy; Company 2017-2018</p>
        </footer>
    </div>
    <script>
        function myFunction() {
          var input, filter, cards, cardContainer, h5, title, i;
          input = document.getElementById("myFilter");
          filter = input.value.toUpperCase();
          cardContainer = document.getElementById("myItems");
          cards = cardContainer.getElementsByClassName("card");
          for (i = 0; i < cards.length; i++) {
              title = cards[i].querySelector(".card-body h5.card-title");
              if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                  cards[i].style.display = "";
              } else {
                  cards[i].style.display = "none";
              }
          }
      }
      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>
