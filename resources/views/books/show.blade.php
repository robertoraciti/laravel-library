@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col"> {{ $book->title }} </div>
        <div class="col"> {{ $book->author}} </div>
        <div class="col"> {{ $book->isbn }} </div>
        <div class="col"> {{ $book->genre }} </div>
        <div class="col"> {{ $book->publishing_year }} </div>
        <div class="col"> {{ $book->pages }} </div> 
        <div class="col"> {{ $book->price }} </div> 
        <div class="col"> {{ $book->plot }} </div> 

</div>


@endsection