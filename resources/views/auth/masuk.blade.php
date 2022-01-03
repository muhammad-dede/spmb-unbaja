@extends('layout.auth')

@section('title', 'Masuk')

@section('content')
    <div class="d-flex flex-center flex-column flex-column-fluid">
        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
            <form action="{{ route('masuk') }}" class="form w-100" id="kt_sign_in_form" method="POST">
                @csrf
                <div class="text-center mb-10">
                    <h1 class="mb-3" style="color: #142B72;">Masuk ke Akunmu</h1>
                    <div class="text-gray-400 fw-bold fs-4">Belum punya akun?
                        <a href="{{ route('daftar') }}" class="link-primary fw-bolder">Daftarkan
                            Dirimu</a>
                    </div>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="fv-row mb-10">
                    <label class="form-label fs-6 fw-bolder text-dark" for="email">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" name="email"
                        autocomplete="off" id="email" value="{{ old('email') }}" />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="fv-row mb-10">
                    <div class="d-flex flex-stack mb-2">
                        <label class="form-label fw-bolder text-dark fs-6 mb-0" for="password">Password</label>
                        <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Lupa Password ?</a>
                    </div>
                    <input class="form-control form-control-lg form-control-solid" type="password" name="password"
                        autocomplete="off" id="password" />
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" id="btn-masuk" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Masuk</span>
                    </button>
                    <div class="text-center text-muted text-uppercase fw-bolder mb-5">ATAU</div>
                    <a href="{{ route('auth.google') }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo"
                            src="{{ asset('') }}public/templates/app/dist/assets/media/svg/brand-logos/google-icon.svg"
                            class="h-20px me-3" />
                        Lanjutkan dengan Google
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
