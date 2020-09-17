@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($book as $item)
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{url('uploads/'.$item->filename)}}" alt=""  class="text-center img-fluid">
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="">
                <div class="card-body text-center">
                    <h2>{{$item->owner}}</h2>
                    <h4>{{$item->class}}</h4>
                    <a href="{{$item->contact}}" class="btn btn-primary mt-5" type="button">Skontaktuj się</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2><strong>{{$item->title}}</strong><strong class="float-right">{{$item->price}} zł</strong></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3><strong>Opis</strong></h3>
                    <p>{{$item->description}}</p>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    var contact = document.getElementById("contact");
    function show() {
        if(contact.style.display === "none") {
            contact.display = "block";
        } else {
            contact.style.display = "none";
        }
    }
</script>
    @endforeach
@endsection