@extends('layouts.app')
@section('title', $id)
@section('styles')
  <style>
    a:hover {
      text-decoration: none;
    }
  </style>
@endsection
@section('content')
  <div class="row justify-content-center">
    <div class="col-12" style="margin-top: -15px">
      <a href="{{ url('/') }}" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
      <div class="row mt-2">
        @if (count($dataRute) > 0)
          @foreach ($dataRute as $data)
            <div class="col-lg-6 mb-4">
              @if ($data['kursi'] == 0)
                <div class="card o-hidden border-0 shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="font-weight-bold text-muted text-uppercase mb-1">{{ $data['tujuan'] }}</div>
                        <div class="h5 mb-0 font-weight-bold text-muted mb-1">{{ $data['start'] }} - {{ $data['end'] }}</div>
                        <small class="text-muted">{{ $data['transportasi'] }} ({{ $data['kode'] }})</small>
                      </div>
                      <div class="col-auto text-right">
                        <div class="h5 mb-0 font-weight-bold text-muted">Rp. {{ number_format($data['harga'], 0, ',', '.') }}</div>
                        <small class="text-muted">/Orang</small>
                        <p class="text-muted font-weight-bold">Habis</p>
                      </div>
                    </div>
                  </div>
                </div>
              @else
                <a href="{{ route('cari.kursi', Crypt::encrypt($data)) }}">
                  <div class="card o-hidden border-0 shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="font-weight-bold text-gray-800 text-uppercase mb-1">{{ $data['tujuan'] }}</div>
                          <div class="h5 mb-0 font-weight-bold text-primary mb-1">{{ $data['start'] }} - {{ $data['end'] }}</div>
                          <small class="text-muted">{{ $data['transportasi'] }} ({{ $data['kode'] }})</small>
                        </div>
                        <div class="col-auto text-right">
                          <div class="h5 mb-0 font-weight-bold text-primary">Rp. {{ number_format($data['harga'], 0, ',', '.') }}</div>
                          <small class="text-muted">/Orang</small>
                          @if ($data['kursi'] < 50)
                            <p class="text-primary" style="margin: 0;"><small>{{ $data['kursi'] }} Kursi Tersedia</small></p>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              @endif
            </div>
          @endforeach
        @else
          <div class="col-12 mb-4">
              <div class="card o-hidden border-0 shadow h-100 py-2">
                <div class="card-body text-center">
                  <h3 class="text-gray-900 font-weight-bold">Ticket tidak tersedia</h3>
                  <p class="text-muted">Ubah pencarian dengan data yang berbeda.</p>
                  <a href="{{ url('/') }}" class="btn btn-primary" style="font-size: 16px; border-radius: 10rem;">
                    Ubah Pencarian
                  </a>
                </div>
              </div>
            </a>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script>
    function formatNumber(num) {
      return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
  </script>
@endsection
