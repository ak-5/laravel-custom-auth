@extends('authMain')

@section('content')
    <h1>{{ Auth::user()->name }}</h1>
    <h3>{{ Auth::user()->email }}</h3>
@endsection
