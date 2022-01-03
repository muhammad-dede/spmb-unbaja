@extends('layout.auth')

@section('title', 'Atur Ulang Password')

@section('content')

    <div class="d-flex flex-center flex-column flex-column-fluid">
        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
            <form action="{{ route('password.update') }}" class="form w-100" id="kt_sign_up_form" method="POST">
                @csrf
                <div class="mb-10 text-center">
                    <h1 class="mb-3" style="color: #142B72;">Atur Ulang Password</h1>
                    <div class="text-gray-400 fw-bold fs-4">
                        Password baru Kamu harus beda dengan password sebelumnya!
                    </div>
                </div>
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6" for="email">Email</label>
                    <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email"
                        autocomplete="off" id="email" value="{{ $email ?? old('email') }}" />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-7 fv-row" data-kt-password-meter="true">
                    <div class="mb-1">
                        <label class="form-label fw-bolder text-dark fs-6" for="password">Password Baru</label>
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
                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-dark fs-6" for="password_confirmation">Konfirmasi
                        Password Baru</label>
                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                        name="password_confirmation" autocomplete="off" id="password_confirmation" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary w-100">
                        <span class="indicator-label">Ubah Password</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
