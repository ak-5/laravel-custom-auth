@extends('authMain')

@section('content')
<h2 class="mt-5 mb-3 text-center">Login Form</h2>
@if (Session::has('error'))
  <div class="card text-white bg-warning mb-4">
    <div class="card-body">
      {{ Session::get('error')}}
    </div>
  </div>
@endif
<form action="{{route('login.post') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" autofocus>
    @if ($errors->has('email'))
        <p class="text-danger">{{ $errors->first('email') }}</p>
    @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection