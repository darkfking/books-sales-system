@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3><strong>Dodaj ogłoszenie</strong></h3>
        </div>
    </div>
     
    {!! Form::open(['route' => 'books.store', 'files'=>true]) !!}
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <h5>{!! Form::label('title', "Tytuł ") !!}</h5>
                                {!! Form::text('title', null, ['class'=>'form-control add-form']) !!}
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-3">Dodaj zdjęcie</h5>
                            {{ Form::file('bookcover') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group"> 
                                <h5>{!! Form::label('category', "Kategoria ") !!}</h5>
                                {!! Form::text('category', null, ['class'=>'form-control add-form']) !!}
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group"> 
                                <h5>{!! Form::label('price', "Cena ") !!}</h5>
                                {!! Form::text('price', null, ['class'=>'form-control add-form']) !!}
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <h5>{!! Form::label('class', "Klasa ") !!}</h5>
                                {!! Form::text('class', null, ['class'=>'form-control add-form']) !!}
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="form-group">
                        <h5>{!! Form::label('description', "Opis ") !!}</h5>
                        {!! Form::textarea('description', null, ['class'=>'form-control add-form']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <h5>{!! Form::label('owner', "Właściciel ") !!}</h5>
                                {!! Form::text('owner', $user, array('class'=>'form-control add-form', 'readonly')) !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <h5>{!! Form::label('contact', "Kontakt ") !!}</h5>
                                {!! Form::text('contact', null, array('class'=>'form-control add-form', 'placeholder'=>'Link do Facebooka')) !!}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group mt-3 float-right">
                {!! Form::submit('Dodaj ogłoszenie', ['class'=>'btn btn-primary btn-lg']) !!} 
            </div>
        </div>
    </div>              
    {!! Form::close() !!}
</div>
@endsection