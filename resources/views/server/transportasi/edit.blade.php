@extends('layouts.app')
@section('title', 'Edit Transportasi')
@section('heading', 'Edit Transportasi')
@section('styles')
  <link href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
  <style>
    .select2-container .select2-selection--single {
      display: block;
      width: 100%;
      height: calc(1.5em + .75rem + 2px);
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 2;
      color: #6e707e;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #d1d3e2;
      border-radius: .35rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: #6e707e;
      line-height: 28px;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
      display: block;
      padding-left: 0;
      padding-right: 0;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      margin-top: -2px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: calc(1.5em + .75rem + 2px);
      position: absolute;
      top: 1px;
      right: 1px;
      width: 20px;
    }
  </style>
@endsection
@section('content')
  <div class="card shadow mb-4 mt-2">
    <form action="{{ route('transportasi.store') }}" method="POST">
      @csrf
      <div class="card-body">
        <input type="hidden" name="id" value="{{ $transportasi->id }}">
        <div class="form-group">
          <label for="name">Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            value="{{ $transportasi->name }}"
            required
          />
        </div>
        <div class="form-group">
          <label for="kode">Kode</label>
          <input
            type="text"
            class="form-control"
            id="kode"
            name="kode"
            value="{{ $transportasi->kode }}"
            required
          />
        </div>
        <div class="form-group">
          <label for="jumlah">Jumlah Kursi</label>
          <input
            type="text"
            class="form-control"
            id="jumlah"
            name="jumlah"
            onkeypress="return inputNumber(event)"
            value="{{ $transportasi->jumlah }}"
            required
          />
        </div>
        <div class="form-group">
          <label for="category_id">Category</label><br>
          <select
            class="select2 form-control"
            id="category_id"
            name="category_id"
            required
            style="width: 100%; color: #6e707e;"
          >
            <option value="" disabled>-- Pilih Category --</option>
            @foreach ($category as $data)
              <option value="{{ $data->id }}"
                @if ($data->id == $transportasi->category_id)
                  selected
                @endif
              >{{ $data->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="card-footer">
        <a href="{{ route('transportasi.index') }}" class="btn btn-warning mr-2">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
@endsection
@section('script')
  <script src="{{ asset('vendor/select2/dist/js/select2.full.min.js') }}"></script>
  <script>
    if(jQuery().select2) {
      $(".select2").select2();
    }
    function inputNumber(e) {
      const charCode = (e.which) ? e.which : w.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }
      return true;
    };
  </script>
@endsection
