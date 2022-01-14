@extends('layout.auth')

@section('title', 'Lengkapi Data Diri')

@section('content')

    <div class="d-flex flex-center flex-column flex-column-fluid">
        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
            <form action="{{ route('lengkapi-data-diri') }}" class="form w-100" id="kt_sign_up_form" method="POST">
                @csrf
                <div class="mb-10 text-center">
                    <h1 class="mb-3" style="color: #142B72;">Lengkapi Data Diri</h1>
                    <div class="text-gray-400 fw-bold fs-4">
                        Lengkapi data diri kamu dibawah ini!
                    </div>
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6" for="name">
                        <span class="required">Nama Lengkap</span>
                        <i class="fas fa-exclamation-circle ms-0 fs-7" data-bs-toggle="tooltip" title="Sesuai Ijazah"></i>
                    </label>
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="name"
                        autocomplete="off" id="name" value="{{ auth()->user()->name ?? old('name') }}" />
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="fv-row mb-7">
                    <label class="form-label fw-bolder text-dark fs-6" for="phone">
                        <span class="required">Nomor Telepon/HP (Aktif)</span>
                    </label>
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="phone"
                        autocomplete="off" id="phone" value="{{ auth()->user()->phone ?? old('phone') }}" />
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="fv-row mb-10">
                    <span>Dengan melanjutkan, kamu setuju dengan&nbsp;<a href="#">Syarat, Ketentuan dan Kebijakan dari SPMB
                            Unbaja</a>&nbsp;&amp;&nbsp;<a href="#">Kebijakan Privasi</a></span>
                </div>
                <div class="text-center">
                    <button type="submit" id="btn-lanjut" class="btn btn-lg btn-primary">
                        <span class="indicator-label">Lanjut</span>
                    </button>
                    <a href="{{ route('keluar') }}" class="btn btn-lg btn-danger"
                        onclick="event.preventDefault();document.getElementById('form-keluar').submit();">
                        <span class="indicator-label">Keluar</span>
                    </a>
                </div>
            </form>
            <form id="form-keluar" action="{{ route('keluar') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

@endsection
