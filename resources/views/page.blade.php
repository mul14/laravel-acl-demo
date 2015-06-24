@extends('master')
@section('content')

<div class="container text-center">
  <h1>Hello</h1>
  <div>
    This page accessible to {{ auth()->user()->name }}
  </div>
  <div>
    <a href="{{ url('/') }}">Go to home page</a>
  </div>
</div>

@endsection
