
@extends('layout')

@section('content')
<div class="jumbotron">
  <h1>Graph calendar integration</h1>
  <p class="lead">using graph APi</p>
  @if(isset($userName))
    <h4>Welcome {{ $userName }}!</h4>
    <p>Use the navigation bar at the top of the page to get started.</p>
  @else
    <a href="/signin" class="btn btn-primary btn-large">Click here to sign in</a>
  @endif
</div>
@endsection
