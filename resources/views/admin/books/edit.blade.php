@extends('layouts.app')

@section('content')
    

    <form action="{{route('admin.books.update', $book)}}" method="POST">
        @csrf
        @method('PUT')

        <a href="{{ route('admin.books.index')}}" class="btn btn-primary">Torna indietro</a>        

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{$book->author}}">
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="number" class="form-control" id="isbn" name="isbn" value="{{$book->isbn}}">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{$book->genre}}">
        </div>

        <div class="mb-3">
            <label for="publishing_year" class="form-label">Anno pubblicazione</label>
            <input type="number" class="form-control" id="publishing_year" name="publishing_year" value="{{$book->publishing_year}}">
        </div>

        <div class="mb-3">
            <label for="pages" class="form-label">Numero pagine</label>
            <input type="number" class="form-control" id="pages" name="pages" value="{{$book->pages}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$book->price}}">
        </div>

        <div class="mb-3">
            <label for="plot" class="form-label">Trama</label>
            <input type="text" class="form-control" id="plot" name="plot" value="{{$book->plot}}">
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

@endsection