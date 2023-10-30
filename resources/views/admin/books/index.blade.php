@extends('layouts.app')

@section('content')
    <section class="container mt-5">
      <a class="btn btn-primary" href="{{route('admin.books.create')}}">Aggiungi nuovo libro</a>
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
                <td>{!! $book->getGenreBadge() ?? '' !!}</td>
                <td>{{$book->price}}</td>
                <td>
                  <a href= " {{ route('admin.books.show', $book )}}"> Dettagli </a>
                  <a href= " {{ route('admin.books.edit', $book )}}"> Modifica </a>
                  <a href= " {{ route('admin.books.destroy', $book )}}" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$book->id}}"> Elimina </a>
                </td>
              </tr>
                @endforeach
              
            </tbody>
          </table>

          {{ $books->links('pagination::bootstrap-5') }}
    </section>
@endsection