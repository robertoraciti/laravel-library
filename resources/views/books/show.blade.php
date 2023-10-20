@extends('layouts.app')

@section('main-content')

<div class="container mt-5">
    <h3 class="text-danger"> {{ $book->title }} </h3>
    <div class="row">
        <div class="col-6 mt-3">  <b>Autore:</b> {{ $book->author}} </div>
        <div class="col-6 mt-3"> <b>Genere:</b> {{ $book->genre }} </div>
        <div class="col-6 mt-3">  <b>ISBN:</b> {{ $book->isbn }} </div>
        <div class="col-6 mt-3">  <b>Anno di pubblicazione:</b> {{ $book->publishing_year }} </div>
        <div class="col-6 mt-3">  <b>N° pagine:</b> {{ $book->pages }} </div> 
        <div class="col-6 mt-3">  <b>Prezzo:</b> €{{ $book->price }} </div> 
        <div class="col-12 mt-3">  <b>Trama:</b> <br> {{ $book->plot }} </div> 

</div>


@endsection