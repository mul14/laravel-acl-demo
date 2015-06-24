@extends('master')
@section('content')

<div class="container">

  <p>
    I am
    <strong>
      @if (auth()->check())
      {{ auth()->user()->name }}
      ( <a href="logout">Logout</a> )
      @else
      Guest
      @endif
    </strong>
  </p>

  <dl>
    <dt>Login as </dt>
    <dd> <a href="login/administrator">Administrator</a> </dd>
    <dd> <a href="login/manager">Manager</a> </dd>
    <dd> <a href="login/staff">Staff</a> </dd>
    <dd> <a href="login/member">Member</a> </dd>
  </dl>

  <dl>
    <dt>Try to access this page </dt>
    <dd><a href="page/backend">Only for Admin</a></dd>
    <dd><a href="page/administration">Only for Admin & Manager</a></dd>
    <dd><a href="page/work">Only for Staff & Manager</a></dd>
    <dd><a href="page/member">Only for Member</a></dd>
  </dl>

</div>

@endsection
