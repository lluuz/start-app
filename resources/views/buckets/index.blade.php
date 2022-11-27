@extends('layouts.main')

@section('content')

  <nav class="navbar bg-light">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Bucket list</span>
    </div>
  </nav>
  <div class="container">
  <div class="row justify-content-between">
    <div class="col-9">
      <p class="h4">All buckets</p>
    </div>
    <div class="col-3">
      <button type="button" class="btn btn-primary">Create New Bucket</button>
    </div>
  </div>
  <div class="row">
    <div >
      <table class="table">
        <thead>
          <tr>
            <th></th>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
          </tr>
        </thead>
        <tbody>
          @foreach($buckets as $bucket)
          <tr>
            <th scope="row">1</th>
            <td>{{ $bucket->name }}</td>
            <td>{{ $bucket->location }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection
