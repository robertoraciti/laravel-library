@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">ISBN</th>
                <th scope="col">Genere</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->genre}}</td>
                <td>{{$book->price}}</td>
                <td>
                  <a href= " {{ route('books.show', $book )}}"> Dettagli </a>
                </td>
              </tr>
                @endforeach
              
            </tbody>
          </table>
    </section>
@endsection