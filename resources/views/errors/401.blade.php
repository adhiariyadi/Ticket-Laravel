@extends('errors::layouts')
@section('title', __('401'))
@section('content')
  <div class="text-center">
    <div class="error mx-auto" data-text="401">401</div>
    <p class="lead text-gray-800 mb-4">Page Unauthorized</p>
    <a href="{{ url('/') }}">&larr; Back to Home</a>
  </div>
@endsection
