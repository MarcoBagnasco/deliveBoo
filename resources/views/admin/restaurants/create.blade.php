@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="POST" action="{{ route('admin.restaurants.store') }}">
            @csrf
            @method('POST')
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Restaurant Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="vat_number" class="col-md-4 col-form-label text-md-right">{{ __('P.IVA') }}</label>

                <div class="col-md-6">
                    <input id="vat_number" type="number" class="form-control @error('vat_number') is-invalid @enderror" name="vat_number" value="{{ old('vat_number') }}" required autocomplete="vat_number" autofocus>

                    @error('vat_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Registra</button>
                </div>
            </div>    
        </form>
    </div>

@endsection