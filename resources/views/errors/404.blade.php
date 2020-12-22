@extends('errors::layouts')
@section('title', __('404'))
@section('content')
  <div class="text-center">
    <div class="error mx-auto" data-text="404">404</div>
    <p class="lead text-gray-800 mb-4">Page Not Found</p>
    <a href="{{ url('/') }}">&larr; Back to Home</a>
  </div>
@endsection
