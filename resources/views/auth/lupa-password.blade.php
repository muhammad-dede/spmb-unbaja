@extends('layout.auth')

@section('title', 'Lupa Password')

@section('content')
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
            <form action="{{ route('password.email') }}" method="POST" class="form w-100" id="kt_password_reset_form">
                @csrf
                <div class="text-center mb-10">
                    <h1 class="mb-3" style="color: #142B72;">Lupa Password ?</h1>
                    <div class="text-gray-400 fw-bold fs-4">Masukkan email kamu untuk mengubah password.</div>
                </div>
                <div class="fv-row mb-10">
                    @if (Session::has('status'))
                        <div class="alert alert-success text-center" role="alert">
                            <strong>{{ Session::get('status') }}</strong>
                        </div>
                    @endif
                    <label class="form-label fw-bolder text-gray-900 fs-6" for="email">Email</label>
                    <input class="form-control form-control-solid" type="email" placeholder="" name="email"
                        autocomplete="off" id="email" value="{{ old('email') }}" />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                    <button type="submit" id="btn-kirim" class="btn btn-lg btn-primary fw-bolder me-4">
                        <span class="indicator-label">Kirim</span>
                    </button>
                    <a href="{{ route('masuk') }}" class="btn btn-lg btn-light-primary fw-bolder">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
