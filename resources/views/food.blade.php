@extends('layouts/main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mt-3 mb-3">{{ $food->title }}</h1>
            <img src="https://images.unsplash.com/photo-1587652813868-6988baecfc90?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGluZG9uZXNpYSUyMGZvb2R8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="makanan" width="1200" height="400" class="img-fluid">
            <p class="mt-3 fs-5">Kategori : <a href="/foods?category={{ $food->category->slug }}"class="text-decoration-none">{{ $food->category->name }}</a></p>
            <article class="my-3 fs-5">{!! $food->body !!}</article>
            
            <a href="/foods"class="text-decoration-none fs-5">Kembali ke Foods</a>
        </div>
    </div>
</div>

    
    

@endsection