@extends('errors::layouts')
@section('title', __('403'))
@section('content')
  <div class="text-center">
    <div class="error mx-auto" data-text="403">403</div>
    <p class="lead text-gray-800 mb-4">Page Forbidden</p>
    <a href="{{ url('/') }}">&larr; Back to Home</a>
  </div>
@endsection
