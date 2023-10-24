@extends('layouts.app')

@section('content')

    @if ($errors->any())  
    <div class="alert alert-danger">
        Correggi i seguenti errori:
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    

    <form action="{{route('admin.books.update', $book)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{old('title') ?? $book->title}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{old('author') ?? $book->author}}">
            @error('author')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="number" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{old('isbn') ?? $book->isbn}}">
            @error('isbn')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre" value="{{old('genre') ?? $book->genre}}">
            @error('genre')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="publishing_year" class="form-label">Anno pubblicazione</label>
            <input type="number" class="form-control @error('publishing_year') is-invalid @enderror" id="publishing_year" name="publishing_year" value="{{old('publishing_year') ?? $book->publishing_year}}">
            @error('publishing_year')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="pages" class="form-label">Numero pagine</label>
            <input type="number" class="form-control @error('pages') is-invalid @enderror" id="pages" name="pages" value="{{old('pages') ?? $book->pages}}">
            @error('pages')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price') ?? $book->price}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="plot" class="form-label">Trama</label>
            <textarea class="form-control" name="plot" id="plot" name="plot">{{old('plot') ?? $book->plot}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>

@endsection