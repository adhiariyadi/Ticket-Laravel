@extends('errors::layouts')
@section('title', __('503'))
@section('content')
  <div class="text-center">
    <div class="error mx-auto" data-text="503">503</div>
    <p class="lead text-gray-800 mb-4">Page Service Unavailable</p>
    <a href="{{ url('/') }}">&larr; Back to Home</a>
  </div>
@endsection
