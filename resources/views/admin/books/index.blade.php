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
                <th scope="col">Tipologia</th>
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
                <td>
                  <p> 
                    
                    
    
                    @forelse ($book->typologies as $typology)
                    <span class="badge rounded-pill" 
                    
                      style="background-color: {{ $typology->color}} "
                      
                      >{{$typology->name ?? ""}} </span>
                    @empty
                    Nessuna tipologia
                    @endforelse
                    
                </p>
                </td>
                <td>{{$book->price}}</td>
                <td>
                  <a href= " {{ route('admin.books.show', $book )}}"> Dettagli </a>
                  <a href= " {{ route('admin.books.edit', $book )}}"> Modifica </a>
                  <a href= "#" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$book->id}}"> Elimina </a>
                </td>
              </tr>
                @endforeach
              
            </tbody>
          </table>

          {{ $books->links('pagination::bootstrap-5') }}
          
    </section>
@endsection

@section('modals')
@foreach($books as $book)
<div class="modal fade" id="delete-modal-{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="#delete-modal-{{$book->id}}">Vuoi confermare l'eliminazione?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Vuoi davvero eliminare il progetto <br><strong>{{$book->title}}</strong> ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            <form action="{{route("admin.books.destroy", $book)}}" method="POST">
                @method('DELETE')
                @csrf

            <button class="btn btn-primary">Elimina</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    @endforeach
@endsection