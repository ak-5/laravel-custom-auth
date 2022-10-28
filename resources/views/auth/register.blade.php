@extends('authMain')

@section('content')
<h2 class="mt-5 mb-3 text-center">Registration Form</h2>
{{-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif --}}
<form method="post" action="{{route('register.post') }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
        @if($errors->has('name'))
            <p class="text-danger">{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <p class="text-danger">{{ $errors->first('email')}}</p>
        @else
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        @endif
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    @if($errors->has('password'))
        <p class="text-danger">{{$errors->first('password')}}</p>
    @endif
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection