@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <div id="kt_header" class="header">
            <div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
                <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
                    data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                    <h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Selamat Datang
                        {{ ucwords(strtolower(auth()->user()->name)) }}
                        <small class="text-muted fs-6 fw-bold ms-1 pt-1">
                            PENERIMAAN MAHASISWA BARU TAHUN AKADEMIK {{ date('Y') }} - GELOMBANG SATU
                        </small>
                    </h1>
                </div>
                <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                    <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon-1 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                    fill="black" />
                                <path opacity="0.3"
                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                    fill="black" />
                            </svg>
                        </span>
                    </div>
                    <a href="{{ route('home') }}" class="d-flex align-items-center">
                        <img alt="Logo" src="{{ asset('') }}public/logo.png" class="h-30px" />
                    </a>
                </div>
                @include('layout.app.topbar')
            </div>
        </div>

        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="container" id="kt_content_container">

                {{-- Pendaftaran Buka --}}
                <div class="row gy-5 g-xl-10 mb-5">
                    <div class="col-xl-12">
                        <div class="notice d-flex bg-light-danger rounded border-danger border border-dashed p-6">
                            <span class="svg-icon svg-icon-2tx svg-icon-danger me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <div class="mb-3 mb-sm-0 fw-bold">
                                    <h4 class="text-gray-800 fw-bolder">
                                        INFORMASI PENDAFTARAN
                                    </h4>
                                    <div class="fs-7 text-gray-700 pe-7">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>Belum Terdaftar</td>
                                                </tr>
                                                <tr>
                                                    <td>Keterangan</td>
                                                    <td>&nbsp;:&nbsp;</td>
                                                    <td>Kamu belum terdaftar. Silahkan pilih jalur pendaftaran yang telah
                                                        kami sediakan!</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap flex-stack my-5">
                    <h2 class="fs-2 fw-bold text-gray-700 my-2">
                        <strong>Jalur Pendaftaran</strong>
                    </h2>
                    <div class="d-flex flex-wrap my-1">
                        <div class="m-0">
                            <select name="status" data-control="select2" data-hide-search="true"
                                class="form-select form-select-white form-select-sm fw-bolder w-150px">
                                <option value="Active" selected="selected">Semua</option>
                                <option value="Approved">Sarjana</option>
                                <option value="Declined">Diploma</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row gy-5 g-xl-10">
                    <div class="col-md-6 col-xl-4">
                        <a href="../../demo3/dist/pages/projects/project.html"
                            class="card border border-2 border-gray-300 border-hover">
                            <div class="card-header border-0 pt-9">
                                <div class="card-title m-0">
                                    <div class="symbol symbol-50px w-50px bg-light">
                                        <img src="{{ asset('') }}public/templates/app/dist/assets/media/svg/brand-logos/plurk.svg"
                                            alt="image" class="p-3" />
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">In Progress</span>
                                </div>
                            </div>
                            <div class="card-body p-9">
                                <div class="fs-3 fw-bolder text-dark">Fitnes App</div>
                                <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                                <div class="d-flex flex-wrap mb-5">
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bolder">Feb 21, 2021</div>
                                        <div class="fw-bold text-gray-400">Due Date</div>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                        <div class="fw-bold text-gray-400">Budget</div>
                                    </div>
                                </div>
                                <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                                    title="This project 50% completed">
                                    <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Emma Smith">
                                        <img alt="Pic"
                                            src="{{ asset('') }}public/templates/app/dist/assets/media/avatars/150-1.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Rudy Stone">
                                        <img alt="Pic"
                                            src="{{ asset('') }}public/templates/app/dist/assets/media/avatars/150-2.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <a href="../../demo3/dist/pages/projects/project.html"
                            class="card border border-2 border-gray-300 border-hover">
                            <div class="card-header border-0 pt-9">
                                <div class="card-title m-0">
                                    <div class="symbol symbol-50px w-50px bg-light">
                                        <img src="{{ asset('') }}public/templates/app/dist/assets/media/svg/brand-logos/disqus.svg"
                                            alt="image" class="p-3" />
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <span class="badge badge-light fw-bolder me-auto px-4 py-3">Pending</span>
                                </div>
                            </div>
                            <div class="card-body p-9">
                                <div class="fs-3 fw-bolder text-dark">Leaf CRM</div>
                                <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                                <div class="d-flex flex-wrap mb-5">
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bolder">May 10, 2021</div>
                                        <div class="fw-bold text-gray-400">Due Date</div>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bolder">$36,400.00</div>
                                        <div class="fw-bold text-gray-400">Budget</div>
                                    </div>
                                </div>
                                <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                                    title="This project 30% completed">
                                    <div class="bg-info rounded h-4px" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Brian Cox">
                                        <img alt="Pic"
                                            src="{{ asset('') }}public/templates/app/dist/assets/media/avatars/150-4.jpg" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <a href="../../demo3/dist/pages/projects/project.html"
                            class="card border border-2 border-gray-300 border-hover">
                            <div class="card-header border-0 pt-9">
                                <div class="card-title m-0">
                                    <div class="symbol symbol-50px w-50px bg-light">
                                        <img src="{{ asset('') }}public/templates/app/dist/assets/media/svg/brand-logos/figma-1.svg"
                                            alt="image" class="p-3" />
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <span class="badge badge-light-success fw-bolder me-auto px-4 py-3">Completed</span>
                                </div>
                            </div>
                            <div class="card-body p-9">
                                <div class="fs-3 fw-bolder text-dark">Atica Banking</div>
                                <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                                <div class="d-flex flex-wrap mb-5">
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bolder">Mar 14, 2021</div>
                                        <div class="fw-bold text-gray-400">Due Date</div>
                                    </div>
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bolder">$605,100.00</div>
                                        <div class="fw-bold text-gray-400">Budget</div>
                                    </div>
                                </div>
                                <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                                    title="This project 100% completed">
                                    <div class="bg-success rounded h-4px" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mad Macy">
                                        <img alt="Pic"
                                            src="{{ asset('') }}public/templates/app/dist/assets/media/avatars/150-3.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Cris Willson">
                                        <img alt="Pic"
                                            src="{{ asset('') }}public/templates/app/dist/assets/media/avatars/150-8.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                        title="Mike Garcie">
                                        <span class="symbol-label bg-info text-inverse-info fw-bolder">M</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-md-12 col-xl-12">
                        <div class="card mb-4 bg-light text-center">
                            <div class="card-body py-12">
                                <a href="#" class="mx-4">
                                    <img src="{{ asset('') }}public/templates/app/dist/assets/media/svg/brand-logos/facebook-4.svg"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <a href="#" class="mx-4">
                                    <img src="{{ asset('') }}public/templates/app/dist/assets/media/svg/brand-logos/instagram-2-1.svg"
                                        class="h-30px my-2" alt="" />
                                </a>
                                <a href="#" class="mx-4">
                                    <img src="{{ asset('') }}public/templates/app/dist/assets/media/svg/brand-logos/youtube.svg"
                                        class="h-30px my-2" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('layout.app.footer')
    </div>
@endsection
