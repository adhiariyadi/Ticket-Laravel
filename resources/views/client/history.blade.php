@extends('layouts.app')
@section('title', 'History')
@section('styles')
  <style>
    a:hover {
      text-decoration: none;
    }

    .card-body {
      padding: .5rem 1rem;
      border-bottom: 1px solid #e3e6f0;
    }
  </style>
@endsection
@section('content')
  <div class="row justify-content-center">
    <div class="col-12" style="margin-top: -15px">
      <a href="{{ url('/') }}" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
      <div class="row mt-2">
        @if ($pemesanan->count() > 0)
          @foreach ($pemesanan as $data)
            <a href="{{ route('transaksi.show', $data->kode) }}">
              <div class="col-lg-6 mb-4">
                  <div class="card o-hidden border-0 shadow h-100">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col font-weight-bold h5" style="margin: 0; color: #000;">
                          {{ $data->rute->start }}<i class="fas fa-long-arrow-alt-right mx-2" style="color: #858796;"></i>{{ $data->rute->end }}
                        </div>
                        <div class="col-auto text-right">
                          <i class="fas fa-angle-right" style="color: #858796;"></i>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <p style="margin: 0; color:#000;">{{ date('l, d F Y H:i', strtotime($data->waktu)) }} WIB</p>
                      <p style="margin: 0; color:#000;">{{ $data->rute->transportasi->name }} ({{ $data->rute->transportasi->kode }})</p>
                    </div>
                  </div>
                </a>
              </div>
            </a>
          @endforeach
        @else
          <div class="col-12 mb-4">
              <div class="card o-hidden border-0 shadow h-100 py-2">
                <div class="card-body text-center">
                  <h3 class="text-gray-900 font-weight-bold">Tidak ada pemesanan</h3>
                  <p class="text-muted">Silahkan lakukan pemesanan ticket terlebih dahulu.</p>
                  <a href="{{ url('/') }}" class="btn btn-primary" style="font-size: 16px; border-radius: 10rem;">
                    Cari Ticket
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
