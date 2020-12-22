@extends('errors::layouts')
@section('title', __('500'))
@section('content')
  <div class="text-center">
    <div class="error mx-auto" data-text="500">500</div>
    <p class="lead text-gray-800 mb-4">Page Server Error</p>
    <a href="{{ url('/') }}">&larr; Back to Home</a>
  </div>
@endsection
