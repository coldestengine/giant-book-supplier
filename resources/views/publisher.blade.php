@extends('master')

@section('title')
  Giant Book Supplier | {{ $title }}
@endsection

@section('content')
<div class="row">
    <p class="fs-2 bg-secondary text-white">Publisher List</p>

    <div class="row d-flex justify-content-center">
      @foreach ($publisher as $pub)
      <div class="card mx-1 mb-3" style="width: 16rem;">
          <img src="{{ $pub->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $pub->name }}</h5>
            <p class="card-text">
              <span>{{ $pub->address }}</span>
            </p>
            <a href="{{ route('publisher.detail', $pub->id) }}" class="btn btn-primary">Detail</a>
          </div>
      </div>
      @endforeach
    </div>
</div>  
    
@endsection