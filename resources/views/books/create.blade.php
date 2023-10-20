@extends('layouts.app')

@section('main-content')
    

    <form action="{{route('books.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" >
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="number" class="form-control" id="isbn" >
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genere" >
        </div>

        <div class="mb-3">
            <label for="publishing_year" class="form-label">Anno pubblicazione</label>
            <input type="number" class="form-control" id="publishing_year" >
        </div>

        <div class="mb-3">
            <label for="pages" class="form-label">Numero pagine</label>
            <input type="number" class="form-control" id="pages" >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" >
        </div>

        <div class="mb-3">
            <label for="plot" class="form-label">Trama</label>
            <input type="text" class="form-control" id="plot" >
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

@endsection