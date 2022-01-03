@extends('layout.auth')

@section('title', 'Pendaftaran')

@section('content')

    <div class="d-flex flex-center flex-column flex-column-fluid">
        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
            <form action="{{ route('daftar') }}" class="form w-100" id="kt_sign_up_form" method="POST">
                @csrf
                <div class="mb-10 text-center">
                    <h1 class="mb-3" style="color: #142B72;">Pendaftaran</h1>
                    <div class="text-gray-400 fw-bold fs-4">Sudah punya akun?
                        <a href="{{ route('masuk') }}" class="link-primary fw-bolder">Masuk disini</a>
                    </div>
                </div>
                <a href="{{ route('auth.google') }}" class="btn btn-light-primary fw-bolder w-100 mb-10">
                    <img alt="Logo"
                        src="{{ asset('') }}public/templates/app/dist/assets/media/svg/brand-logos/google-icon.svg"
                        class="h-20px me-3" />Lanjutkan dengan Google</a>
                <div class="d-flex align-items-center mb-10">
                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                    <span class="fw-bold text-gray-400 fs-7 mx-2">ATAU</span>
                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6" for="name">Nama</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="name"
                        autocomplete="off" id="name" value="{{ old('name') }}" />
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6" for="email">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email"
                        autocomplete="off" id="email" value="{{ old('email') }}" />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6" for="phone">Nomor Telepon</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="phone"
                        autocomplete="off" id="phone" value="{{ old('phone') }}" />
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-7 fv-row" data-kt-password-meter="true">
                    <div class="mb-1">
                        <label class="form-label fw-bolder text-dark fs-6" for="password">Password</label>
                        <div class="position-relative mb-3">
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="password" autocomplete="off" id="password" />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-muted">Gunakan 8 karakter atau lebih dengan campuran huruf, angka &amp; simbol.
                    </div>
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6" for="password_confirmation">Konfirmasi
                        Password</label>
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                        name="password_confirmation" autocomplete="off" id="password_confirmation" />
                </div>
                <div class="fv-row mb-10">
                    <span>Dengan mendaftar, kamu setuju dengan&nbsp;<a href="#">Syarat, Ketentuan dan Kebijakan dari SPMB
                            Unbaja</a>&nbsp;&amp;&nbsp;<a href="#">Kebijakan Privasi</a></span>
                </div>
                <div class="text-center">
                    <button type="submit" id="btn-daftar" class="btn btn-lg btn-primary w-100">
                        <span class="indicator-label">Daftar</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('my-js')
    {{-- <script src="{{ asset('') }}public/templates/app/dist/assets/js/custom/authentication/sign-up/general.js"></script> --}}
@endpush
