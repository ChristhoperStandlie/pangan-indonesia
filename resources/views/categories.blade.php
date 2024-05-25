@extends('layouts/main')

@section('container')
    <h1 class="mb-3 text-center">Food Categories</h1>
    
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/categories">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
        
<div class="container">
    <div class="row">
    @foreach ($categories as $category)
        <div class="col-md-4 mb-3">
            <div class="card text-bg-dark">
            <img src="https://images.unsplash.com/photo-1587652813868-6988baecfc90?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGluZG9uZXNpYSUyMGZvb2R8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="..." height="500" width="500">
            <div class="card-img-overlay d-flex align-items-center">
            <h5 class="card-title"><a href="/foods?category={{ $category->slug }}" class="position-absolute px-3 py-2 text-white text-decoration-none" style="background-color: rgba(0,0,0,0.7);">{{ $category->name }}</a></h5>
            </div>
            </div> 
            </div>    
    @endforeach
    </div>
</div>


@endsection

