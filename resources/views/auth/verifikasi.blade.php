@extends('layout.auth')

@section('title', 'Verifikasi Email')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
            <div class="pt-lg-10 mb-10">
                <h1 class="fw-bolder fs-2qx mb-10" style="color: #142B72;">Verifikasi Email Kamu</h1>
                <div class="fs-3 fw-bold text-muted mb-15">Kami telah mengirim email ke
                    <a href="#" class="link-primary fw-bolder">unbaja@mail.com</a>
                    <br />silahkan klik link verifikasi untuk memverifikasi email kamu.
                </div>
                <div class="text-center mb-15">
                    <a href="{{ route('keluar') }}" class="btn btn-lg btn-danger fw-bolder"
                        onclick="event.preventDefault();document.getElementById('form-keluar').submit();">Keluar</a>
                    <form id="form-keluar" action="{{ route('keluar') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <div class="fs-5">
                    <div class="row">
                        @if (Session::has('resend'))
                            <strong class="text-success col-md-12 mb-3">{{ Session::get('resend') }}</strong>
                        @endif
                        <div class="col-md-12">
                            <span class="fw-bold text-gray-700">Jika tidak menerima email?</span>
                            <a href="{{ route('verification.send') }}" class="link-primary fw-bolder"
                                onclick="event.preventDefault();document.getElementById('form-resend').submit();">Kirim
                                Ulang Link Verifikasi</a>
                            <form id="form-resend" action="{{ route('verification.send') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
