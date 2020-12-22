@extends('errors::layouts')
@section('title', __('419'))
@section('content')
  <div class="text-center">
    <div class="error mx-auto" data-text="419">419</div>
    <p class="lead text-gray-800 mb-4">Page Expired</p>
    <a href="{{ url('/') }}">&larr; Back to Home</a>
  </div>
@endsection
