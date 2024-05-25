@extends('layouts/main')

@section('container')
    <h1 class="mb-5">Food Category : {{ $category }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/foods">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    
    @if ($foods->count())

    <div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $foods[0]->category->name }}" class="card-img-top" alt="{{ $foods[0]->category->name }}">
  <div class="card-body text-center">
    <h3 class="card-title">{{ $foods[0]->title }}</h3>
    <p>Kategori : <a href="/categories/{{ $foods[0]->category->slug }}"class="text-decoration-none">{{ $foods[0]->category->name }}</a></p>
    <p class="card-text">{{ $foods[0]->excerpt }}</p>
    <p class="card-text"><small class="text-body-secondary">{{ $foods[0]->created_at->diffForHumans() }}</small></p>
    <a href="/foods/{{ $foods[0]->slug }}" class="text-decoration-none btn btn-success">Read more</a>

  </div>
</div>
    @else
    <p class="text-center fs-4">Makanan yang di cari tidak ditemukan</p>
    @endif

<div class="container">
    <div class="row">
    @foreach ($foods->skip(1) as $food)
        <div class="col-md-4 mb-3">
            <div class="card">
            <img src="https://source.unsplash.com/500x400?{{ $food->category->name }}" class="card-img-top" alt="{{ $food->category->name }}">
            <div class="card-body">
            <h5 class="card-title">{{ $food->title }}</h5>
            <p>Kategori : <a href="/categories/{{ $food->category->slug }}"class="text-decoration-none">{{ $food->category->name }}</a></p>
            <p class="card-text">{{ $food->excerpt }}</p>
            <p class="card-text"><small class="text-body-secondary">{{ $food->created_at->diffForHumans() }}</small></p>
            <a href="/foods/{{ $food->slug }}" class="text-decoration-none btn btn-success">Read more</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    
    
@endsection

