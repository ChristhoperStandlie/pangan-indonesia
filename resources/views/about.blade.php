@extends('layouts/main')

@section('container')
<div class="text-center">
    <h1>Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $desc }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200" class="img-thumbnail rounded-circle">
</div>
@endsection