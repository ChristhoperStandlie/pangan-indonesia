@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Foods List</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>
     
      <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($foods as $food)
            
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $food->title }}</td>
              <td>{{ $food->category->name }}</td>
              <td>
                <a href="/dashboard/foods/{{ $food->id }}" class="badge bg-success"><span data-feather="eye"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
              </td>
            </tr>
            @endforeach
      
          </tbody>
        </table>
      </div>

@endsection

