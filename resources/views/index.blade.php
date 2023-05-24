@extends('master')

@section('title')
  Giant Book Supplier | {{ $title }}
@endsection

@section('content')
<div class="row d-flex justify-content-center">

  @if($title == 'Publisher Detail')
  <div class="row text-white bg-secondary lh-1 pt-3 mb-3">
    <p class="fs-6">{{ $publisher->name }}</p>
    <p class="fs-6">Address - {{ $publisher->address }}</p>
    <p class="fs-6">Phone - {{ $publisher->phone }}</p>
    <p class="fs-6">Email - {{ $publisher->email }}</p>
  </div>
  @else
  <p class="fs-2 bg-secondary text-white">{{ $title }}</p>

  @endif

  <div class="row d-flex justify-content-center">
    @if ($books->count())
      @foreach ($books as $book)
      <div class="card mx-1 mb-3" style="width: 16rem;">
        <img src="{{ $book->image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $book->title }}</h5>
          <p class="card-text">
            <span>by</span>
            <br>
            <span>{{ $book->author }}</span>
          </p>
          <a href="{{ route('book.detail', $book->id) }}" class="btn btn-primary">Detail</a>
        </div>
      </div>
      @endforeach

    @else
      <h1>No data to be shown...</h1>
    @endif
        
    </div>
</div>
@endsection