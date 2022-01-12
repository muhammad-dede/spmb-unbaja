<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="">
    <meta content="{{ config('app.name') }}" name="description">
    <meta content="{{ config('app.name') }}" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:url" content="{{ config('app.name') }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    @hasSection('title')
        <title>@yield('title')&nbsp;|&nbsp;{{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <link rel="canonical" href="{{ route('index') }}" />
    <link rel="shortcut icon" href="{{ asset('') }}public/logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('') }}public/templates/app/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('') }}public/templates/app/dist/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
</head>

<body id="kt_body" class="bg-body">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column"
            id="kt_create_account_stepper">
            <div class="d-flex flex-column flex-lg-row-auto w-xl-500px bg-lighten shadow-sm">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-500px scroll-y">
                    <div class="d-flex flex-row-fluid flex-column flex-center p-10 pt-lg-20">
                        <a href="{{ route('home') }}" class="mb-20">
                            <img alt="Logo" src="{{ asset('') }}public/logo.png" class="h-100px" />
                        </a>
                        <div class="stepper-nav">
                            <div id="tab-nav-data-diri" class="stepper-item">
                                <div class="stepper-line w-40px"></div>
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Data Diri</h3>
                                    <div class="stepper-desc fw-bold">Lengkapi Data Diri Kamu</div>
                                </div>
                            </div>
                            <div id="tab-nav-data-ortu" class="stepper-item">
                                <div class="stepper-line w-40px"></div>
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Data Orang Tua & Wali</h3>
                                    <div class="stepper-desc fw-bold">Lengkapi Data Orang Tua & Wali Kamu</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-700px p-10 p-lg-15 mx-auto">
                        {{-- <form action="#" class="my-auto pb-5" id="kt_create_account_form" method="POST"> --}}
                        <form action="{{ route('update-data-diri') }}" class="my-auto pb-5"
                            id="form-update-data-diri" method="POST">
                            @csrf
                            <div id="tab-content-data-diri">
                                <div class="w-100">
                                    <div class="pb-10 pb-lg-15">
                                        <h2 class="fw-bolder d-flex align-items-center text-dark">Data Diri
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Biodata Diri"></i>
                                        </h2>
                                        <div class="text-muted fw-bold fs-6">
                                            Lengkapi data diri kamu.
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="nama_lengkap">
                                            <span class="required">Nama Lengkap</span>
                                            <i class="fas fa-exclamation-circle ms-0 fs-7" data-bs-toggle="tooltip"
                                                title="Sesuai Ijazah"></i>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="nama_lengkap" autocomplete="off" id="nama_lengkap"
                                            value="{{ auth()->user()->name ?? old('nama_lengkap') }}" />
                                        <small class="text-danger text-error" id="nama_lengkap_error"></small>
                                        @error('nama_lengkap')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="nik">
                                            <span class="required">NIK (NO. KTP)</span>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="nik" autocomplete="off" id="nik"
                                            value="{{ old('nik') }}" />
                                        <small class="text-danger text-error" id="nik_error"></small>
                                        @error('nik')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6">
                                            <span class="required">Jenis Kelamin</span>
                                        </label>
                                        <div class="row mb-0" data-kt-buttons="true" id="id_jenis_kelamin">
                                            @foreach (all_jenis_kelamin() as $data)
                                                <div class="col">
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-3 {{ old('id_jenis_kelamin') == $data->id ? 'active' : '' }}">
                                                        <input type="radio" class="btn-check"
                                                            name="id_jenis_kelamin" value="{{ $data->id }}"
                                                            {{ old('id_jenis_kelamin') == $data->id ? 'checked' : '' }} />
                                                        <span
                                                            class="fw-bolder fs-3">{{ $data->jenis_kelamin }}</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <small class="text-danger text-error" id="id_jenis_kelamin_error"></small>
                                        @error('id_jenis_kelamin')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="tempat_lahir">
                                            <span class="required">Tempat Lahir</span>
                                            <i class="fas fa-exclamation-circle ms-0 fs-7" data-bs-toggle="tooltip"
                                                title="Sesuai Ijazah"></i>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="tempat_lahir" autocomplete="off" id="tempat_lahir"
                                            value="{{ old('tempat_lahir') }}" />
                                        <small class="text-danger text-error" id="tempat_lahir_error"></small>
                                        @error('tempat_lahir')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="tgl_lahir">
                                            <span class="required">Tanggal Lahir</span>
                                            <i class="fas fa-exclamation-circle ms-0 fs-7" data-bs-toggle="tooltip"
                                                title="Sesuai Ijazah"></i>
                                        </label>
                                        <div class="position-relative d-flex align-items-center">
                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                        fill="black" />
                                                    <path
                                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                        fill="black" />
                                                    <path
                                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <input type="date" class="form-control form-control-solid ps-12"
                                                placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl_lahir"
                                                value="{{ old('tgl_lahir') }}" />
                                        </div>
                                        <small class="text-danger text-error" id="tgl_lahir_error"></small>
                                        @error('tgl_lahir')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="id_agama">
                                            <span class="required">Agama</span>
                                        </label>
                                        <select name="id_agama" data-placeholder=""
                                            class="form-select form-select-solid" id="id_agama">
                                            <option value=""></option>
                                            @foreach (all_agama() as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ old('id_agama') == $data->id ? 'selected' : '' }}>
                                                    {{ $data->agama }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger text-error" id="id_agama_error"></small>
                                        @error('id_agama')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="telp">
                                            <span class="required">Nomor Telepon/HP (Aktif)</span>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="telp" autocomplete="off" id="telp"
                                            value="{{ auth()->user()->phone ?? old('telp') }}" />
                                        <small class="text-danger text-error" id="telp_error"></small>
                                        @error('telp')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div id="tab-content-data-ortu">
                                <div class="w-100">
                                    <div class="pb-10 pb-lg-15">
                                        <h2 class="fw-bolder text-dark">Data Orang Tua & Wali</h2>
                                        <div class="text-muted fw-bold fs-6">
                                            Lengkapi data orang tua & wali kamu.
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="nama_ibu">
                                            <span class="required">Nama Ibu</span>
                                            <i class="fas fa-exclamation-circle ms-0 fs-7" data-bs-toggle="tooltip"
                                                title="Sesuai Kartu Keluarga"></i>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="nama_ibu" autocomplete="off" id="nama_ibu"
                                            value="{{ old('nama_ibu') }}" />
                                        <small class="text-danger text-error" id="nama_ibu_error"></small>
                                        @error('nama_ibu')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="nama_ayah">
                                            <span>Nama Ayah</span>
                                            <i class="fas fa-exclamation-circle ms-0 fs-7" data-bs-toggle="tooltip"
                                                title="Sesuai Kartu Keluarga"></i>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="nama_ayah" autocomplete="off" id="nama_ayah"
                                            value="{{ old('nama_ayah') }}" />
                                        <small class="text-danger text-error" id="nama_ayah_error"></small>
                                        @error('nama_ayah')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="id_pekerjaan_ortu">
                                            <span>Pekerjaan Orang Tua</span>
                                        </label>
                                        <select name="id_pekerjaan_ortu" data-placeholder=""
                                            class="form-select form-select-solid" id="id_pekerjaan_ortu">
                                            <option value=""></option>
                                            @foreach (all_pekerjaan() as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ old('id_pekerjaan_ortu') == $data->id ? 'selected' : '' }}>
                                                    {{ $data->nama_pekerjaan }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger text-error" id="id_pekerjaan_ortu_error"></small>
                                        @error('id_pekerjaan_ortu')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="alamat_ortu">
                                            <span>Alamat Orang Tua</span>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="alamat_ortu" autocomplete="off" id="alamat_ortu"
                                            value="{{ old('alamat_ortu') }}" />
                                        <small class="text-danger text-error" id="alamat_ortu_error"></small>
                                        @error('alamat_ortu')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6"
                                                    for="id_provinsi_ortu">
                                                    <span>Provinsi</span>
                                                </label>
                                                <select name="id_provinsi_ortu" data-placeholder=""
                                                    class="form-select form-select-solid" id="id_provinsi_ortu">
                                                    <option value=""></option>
                                                    @foreach (all_provinsi() as $data)
                                                        <option value="{{ $data->id }}"
                                                            {{ old('id_provinsi_ortu') == $data->id ? 'selected' : '' }}>
                                                            {{ $data->nama_wilayah }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger text-error"
                                                    id="id_provinsi_ortu_error"></small>
                                                @error('id_provinsi_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6"
                                                    for="id_kab_kota_ortu">
                                                    <span>Kabupaten/Kota</span>
                                                </label>
                                                <select name="id_kab_kota_ortu" data-placeholder=""
                                                    class="form-select form-select-solid" id="id_kab_kota_ortu">
                                                    <option value=""></option>
                                                </select>
                                                <small class="text-danger text-error"
                                                    id="id_kab_kota_ortu_error"></small>
                                                @error('id_kab_kota_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6"
                                                    for="id_kecamatan_ortu">
                                                    <span>Kecamatan</span>
                                                </label>
                                                <select name="id_kecamatan_ortu" data-placeholder=""
                                                    class="form-select form-select-solid" id="id_kecamatan_ortu">
                                                </select>
                                                <small class="text-danger text-error"
                                                    id="id_kecamatan_ortu_error"></small>
                                                @error('id_kecamatan_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6"
                                                    for="kelurahan_ortu">
                                                    <span>Kelurahan</span>
                                                </label>
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" placeholder="" name="kelurahan_ortu" autocomplete="off"
                                                    id="kelurahan_ortu" value="{{ old('kelurahan_ortu') }}" />
                                                <small class="text-danger text-error"
                                                    id="kelurahan_ortu_error"></small>
                                                @error('kelurahan_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label fw-bolder text-dark fs-6" for="dusun_kp_ortu">
                                                    <span>Dusun/Kampung</span>
                                                </label>
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" placeholder="" name="dusun_kp_ortu" autocomplete="off"
                                                    id="dusun_kp_ortu" value="{{ old('dusun_kp_ortu') }}" />
                                                <small class="text-danger text-error" id="dusun_kp_ortu_error"></small>
                                                @error('dusun_kp_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label fw-bolder text-dark fs-6" for="rt_ortu">
                                                    <span>RT</span>
                                                </label>
                                                <select name="rt_ortu" data-placeholder=""
                                                    class="form-select form-select-solid" id="rt_ortu">
                                                    <option value=""></option>
                                                    @foreach (get_rt() as $data)
                                                        <option value="{{ $data['rt'] }}"
                                                            {{ old('rt_ortu') == $data['rt'] ? 'selected' : '' }}>
                                                            {{ $data['rt'] }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger text-error" id="rt_ortu_error"></small>
                                                @error('rt_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label fw-bolder text-dark fs-6" for="rw_ortu">
                                                    <span>RW</span>
                                                </label>
                                                <select name="rw_ortu" data-placeholder=""
                                                    class="form-select form-select-solid" id="rw_ortu">
                                                    <option value=""></option>
                                                    @foreach (get_rw() as $data)
                                                        <option value="{{ $data['rw'] }}"
                                                            {{ old('rw_ortu') == $data['rw'] ? 'selected' : '' }}>
                                                            {{ $data['rw'] }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger text-error" id="rw_ortu_error"></small>
                                                @error('rw_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label fw-bolder text-dark fs-6" for="kode_pos_ortu">
                                                    <span>Kode POS</span>
                                                </label>
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" placeholder="" name="kode_pos_ortu" autocomplete="off"
                                                    id="kode_pos_ortu" value="{{ old('kode_pos_ortu') }}" />
                                                <small class="text-danger text-error" id="kode_pos_ortu_error"></small>
                                                @error('kode_pos_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label fw-bolder text-dark fs-6" for="telp_ortu">
                                                    <span>Telepon Orang Tua</span>
                                                </label>
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" placeholder="" name="telp_ortu" autocomplete="off"
                                                    id="telp_ortu" value="{{ old('telp_ortu') }}" />
                                                <small class="text-danger text-error" id="telp_ortu_error"></small>
                                                @error('telp_ortu')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-10">
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="nama_wali">
                                            <span>Nama Wali</span>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="nama_wali" autocomplete="off" id="nama_wali"
                                            value="{{ old('nama_wali') }}" />
                                        <small class="text-danger text-error" id="nama_wali_error"></small>
                                        @error('nama_wali')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="id_pekerjaan_wali">
                                            <span>Pekerjaan Wali</span>
                                        </label>
                                        <select name="id_pekerjaan_wali" data-placeholder=""
                                            class="form-select form-select-solid" id="id_pekerjaan_wali">
                                            <option value=""></option>
                                            @foreach (all_pekerjaan() as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ old('id_pekerjaan_wali') == $data->id ? 'selected' : '' }}>
                                                    {{ $data->nama_pekerjaan }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger text-error" id="id_pekerjaan_wali_error"></small>
                                        @error('id_pekerjaan_wali')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="alamat_wali">
                                            <span>Alamat Wali</span>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="alamat_wali" autocomplete="off" id="alamat_wali"
                                            value="{{ old('alamat_wali') }}" />
                                        <small class="text-danger text-error" id="alamat_wali_error"></small>
                                        @error('alamat_wali')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="fv-row mb-7">
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6"
                                                    for="id_provinsi_wali">
                                                    <span>Provinsi</span>
                                                </label>
                                                <select name="id_provinsi_wali" data-placeholder=""
                                                    class="form-select form-select-solid" id="id_provinsi_wali">
                                                    <option value=""></option>
                                                    @foreach (all_provinsi() as $data)
                                                        <option value="{{ $data->id }}"
                                                            {{ old('id_provinsi_wali') == $data->id ? 'selected' : '' }}>
                                                            {{ $data->nama_wilayah }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger text-error"
                                                    id="id_provinsi_wali_error"></small>
                                                @error('id_provinsi_wali')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6"
                                                    for="id_kab_kota_wali">
                                                    <span>Kabupaten/Kota</span>
                                                </label>
                                                <select name="id_kab_kota_wali" data-placeholder=""
                                                    class="form-select form-select-solid" id="id_kab_kota_wali">
                                                    <option value=""></option>
                                                </select>
                                                <small class="text-danger text-error"
                                                    id="id_kab_kota_wali_error"></small>
                                                @error('id_kab_kota_wali')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6"
                                                    for="id_kecamatan_wali">
                                                    <span>Kecamatan</span>
                                                </label>
                                                <select name="id_kecamatan_wali" data-placeholder=""
                                                    class="form-select form-select-solid" id="id_kecamatan_wali">
                                                    <option value=""></option>
                                                </select>
                                                <small class="text-danger text-error"
                                                    id="id_kecamatan_wali_error"></small>
                                                @error('id_kecamatan_wali')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6"
                                                    for="kelurahan_wali">
                                                    <span>Kelurahan</span>
                                                </label>
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="text" placeholder="" name="kelurahan_wali" autocomplete="off"
                                                    id="kelurahan_wali" value="{{ old('kelurahan_wali') }}" />
                                                <small class="text-danger text-error"
                                                    id="kelurahan_wali_error"></small>
                                                @error('kelurahan_wali')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6" for="rt_wali">
                                                    <span>RT</span>
                                                </label>
                                                <select name="rt_wali" data-placeholder=""
                                                    class="form-select form-select-solid" id="rt_wali">
                                                    <option value=""></option>
                                                    @foreach (get_rt() as $data)
                                                        <option value="{{ $data['rt'] }}"
                                                            {{ old('rt_wali') == $data['rt'] ? 'selected' : '' }}>
                                                            {{ $data['rt'] }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger text-error" id="rt_wali_error"></small>
                                                @error('rt_wali')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label class="form-label fw-bolder text-dark fs-6" for="rw_wali">
                                                    <span>RW</span>
                                                </label>
                                                <select name="rw_wali" data-placeholder=""
                                                    class="form-select form-select-solid" id="rw_wali">
                                                    <option value=""></option>
                                                    @foreach (get_rw() as $data)
                                                        <option value="{{ $data['rw'] }}"
                                                            {{ old('rw_wali') == $data['rw'] ? 'selected' : '' }}>
                                                            {{ $data['rw'] }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger text-error" id="rw_wali_error"></small>
                                                @error('rw_wali')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6" for="telp_wali">
                                            <span>Telepon Wali</span>
                                        </label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="telp_wali" autocomplete="off" id="telp_wali"
                                            value="{{ old('telp_wali') }}" />
                                        <small class="text-danger text-error" id="telp_wali_error"></small>
                                        @error('telp_wali')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-stack pt-15">
                                <div class="mr-2">
                                    <button id="btn-prev" type="submit" class="btn btn-lg btn-light-primary me-3">
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                                    fill="black" />
                                                <path
                                                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                    fill="black" />
                                            </svg>
                                            Sebelumnya
                                        </span>
                                    </button>
                                </div>
                                <div>
                                    <button id="btn-submit" type="submit" class="btn btn-lg btn-primary">
                                        <span class="indicator-label">Simpan
                                            <span class="svg-icon svg-icon-4 ms-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                        transform="rotate(-180 18 13)" fill="black" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button id="btn-next" type="button" class="btn btn-lg btn-primary"
                                        data-kt-stepper-action="next">Selanjutnya
                                        <span class="svg-icon svg-icon-4 ms-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="black" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <div class="d-flex flex-center fw-bold fs-6">
                        <a href="http://www.unbaja.ac.id/" class="text-muted text-hover-primary px-2"
                            target="_blank">&copy;
                            Universitas Banten Jaya&nbsp;{{ date('Y') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('') }}public/vendor/jquery.js"></script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/js/scripts.bundle.js"></script>
    {{-- <script src="{{ asset('') }}public/templates/app/dist/assets/js/custom/modals/create-account.js"></script> --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var base_url = "{{ route('index') }}";
        $(document).ready(function() {
            dataDiri();

            function dataDiri() {
                $("#tab-content-data-diri").show();
                $("#tab-content-data-ortu").hide();
                $("#btn-prev").hide();
                $("#btn-submit").hide();
                $("#btn-next").show();
            }

            function dataOrtu() {
                $("#tab-content-data-diri").hide();
                $("#tab-content-data-ortu").show();
                $("#btn-prev").show();
                $("#btn-submit").show();
                $("#btn-next").hide();
            }

            function get_wilayah(id = '', element = '') {
                if (id !== "") {
                    $.ajax({
                        url: base_url + '/master/get-wilayah/' + id,
                        method: 'GET',
                        type: "json",
                        success: function(response) {
                            html = '<option value="" selected></option>';
                            if (response.data.length > 0) {
                                $.each(response.data, function(key, data) {
                                    html += `
                                    <option value="` + data.id + `">` + data.nama_wilayah + `</option>
                                `;
                                });
                            }
                            $(element).append(html);
                        }
                    });
                }
            }

            $("#id_provinsi_ortu").change(function() {
                $("#id_kab_kota_ortu").find('option').remove();
                $("#id_kecamatan_ortu").find('option').remove();
                let id = $(this).val();
                let element = "#id_kab_kota_ortu";
                get_wilayah(id, element);
            });

            $("#id_kab_kota_ortu").change(function() {
                $("#id_kecamatan_ortu").find('option').remove();
                let id = $(this).val();
                let element = "#id_kecamatan_ortu";
                get_wilayah(id, element);
            });

            $("#id_provinsi_wali").change(function() {
                $("#id_kab_kota_wali").find('option').remove();
                $("#id_kecamatan_wali").find('option').remove();
                let id = $(this).val();
                let element = "#id_kab_kota_wali";
                get_wilayah(id, element);
            });

            $("#id_kab_kota_wali").change(function() {
                $("#id_kecamatan_wali").find('option').remove();
                let id = $(this).val();
                let element = "#id_kecamatan_wali";
                get_wilayah(id, element);
            });

            $("#btn-prev").click(function(event) {
                event.preventDefault();
                dataDiri();
            });

            $("#btn-next").click(function(event) {
                event.preventDefault();
                $.ajax({
                    url: base_url + '/update-data-diri/validasi/data-diri',
                    method: "POST",
                    data: new FormData($("#form-update-data-diri")[0]),
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('.text-error').text('');
                    },
                    success: function(response) {
                        if (response.status == 400) {
                            $.each(response.errors, function(prefix, val) {
                                $('#' + prefix + '_error').text(val[0]);
                                $('html, body').animate({
                                    scrollTop: $('#' + prefix)
                                        .offset().top - 200
                                }, 1000);
                                return false;
                            });
                        } else if (response.status == 200) {
                            dataOrtu();
                        }
                    }
                });
            });

            $("#btn-submit").click(function(event) {
                event.preventDefault();
                $.ajax({
                    url: base_url + '/update-data-diri/validasi/data-ortu',
                    method: "POST",
                    data: new FormData($("#form-update-data-diri")[0]),
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('.text-error').text('');
                    },
                    success: function(response) {
                        if (response.status == 400) {
                            $.each(response.errors, function(prefix, val) {
                                $('#' + prefix + '_error').text(val[0]);
                                $('html, body').animate({
                                    scrollTop: $('#' + prefix)
                                        .offset().top - 200
                                }, 1000);
                                return false;
                            });
                        } else if (response.status == 200) {
                            $("#form-update-data-diri").submit();
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
