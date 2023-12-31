@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('admin.books.index')}}" class="btn btn-primary">Torna indietro</a>
        <a href="{{ route('admin.books.edit', $book)}}" class="btn btn-warning">Modifica</a>
    </div>
    <h3 class="text-danger"> {{ $book->title }} </h3>
    <div class="row">
        <div class="col-6 mt-3">  <b>Autore:</b> {{ $book->author}} </div>
        <div class="col-6 mt-3"> <b>Genere:</b> {!! $book->getGenreBadge() !!} </div>
        <div class="col-6 mt-3">  <b>ISBN:</b> {{ $book->isbn }} </div>
        <div class="col-6 mt-3">  <b>Anno di pubblicazione:</b> {{ $book->publishing_year }} </div>
        <div class="col-6 mt-3">  <b>N° pagine:</b> {{ $book->pages }} </div> 
        <div class="col-6 mt-3">  <b>Prezzo:</b> €{{ $book->price }} </div> 
        <div class="col-12 mt-3">  <b>Trama:</b> <br> {{ $book->plot }} </div> 
    </div>
    <div class="row">
        <div class="col">
            <p> 
                <strong>Tipologie:</strong>
                

                @forelse ($book->typologies as $typology)
                <span class="badge rounded-pill" 
                
                  style="background-color: {{ $typology->color}} "
                  
                  >{{$typology->name ?? ""}} </span>
                @empty
                <span class='badge rounded-pill mx-1' style='background-color: grey'>Nessuna tipologia</span>
                @endforelse
                
            </p>
        </div>
        
    </div>


@endsection