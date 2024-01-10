<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icon.png') }}" />
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Export to Word App</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
    <!-- Custom styles for this template -->
    {{-- <link href="{{ asset('sticky-footer-navbar.css') }}" rel="stylesheet"> --}}
</head>

<body class="d-flex flex-column h-100">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    {{-- <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div> --}}

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    {{-- Demo App --}}
                    <img src="{{ asset('assets/img/icon2.png') }}" alt="" width="90px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        {{-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0 mt-5">
        <div class="container">
            {{-- <h3 class="mt-5">Export to Word</h3> --}}
            <div class="row mt-5">
                <div class="col-sm-6 mt-4">
                    {{-- Risalah Rapat --}}
                    <div class="card mb-5">
                        <div class="card-header fw-bold">
                            (2) Risalah Rapat (Risapat)
                        </div>
                        <div class="card-body">
                            {{-- <h5 class="card-title">Special title treatment</h5> --}}
                            <form method="post" action="{{ route('word.index') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="judul_risapat" class="col-sm-3 col-form-label">Judul Risapat</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="judul_risapat" id="judul_risapat"></textarea>
                                        <div class="form-text">(Cek di NDE Pelimpahan)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_risapat" class="col-sm-3 col-form-label">Nomor Risapat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="no_risapat" id="no_risapat"
                                            value="TEL. ... /LG 200/TR6-W500/2023">
                                        <div class="form-text">(Minta Sekretaris)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tgl_risapat" class="col-sm-3 col-form-label">Tanggal Risapat</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="tgl_risapat" id="tgl_risapat">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="peserta_rapat" class="col-sm-3 col-form-label">Peserta Rapat
                                        Mitra</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" onchange="val()" aria-label="Default select example"
                                            id="peserta_rapat" name="peserta_rapat">
                                            <option selected>Peserta Rapat Mitra</option>
                                            <option value="PT. TELKOM AKSES">PT. TELKOM AKSES</option>
                                            <option value="KOPERASI KARYAWAN TELKOM KALTENG ICC">KOPERASI KARYAWAN TELKOM KALTENG ICC</option>
                                            <option value="Mitra Lainnya">Mitra Lainnya</option>
                                        </select>
                                        <div class="form-text">(Tanya ke User)</div>
                                    </div>
                                </div>
                                <div style="display: none" id="mitra_lainnya">
                                    <div class="row mb-3">
                                        <label for="peserta_rapat_lainnya" class="col-sm-3 col-form-label">Mitra
                                            Lainnya</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="peserta_rapat_lainnya"
                                                id="peserta_rapat_lainnya">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="ketua_mitra" class="col-sm-3 col-form-label">Ketua Peserta Rapat
                                        Mitra</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="ketua_mitra"
                                            id="ketua_mitra">
                                        <div class="form-text">(Tanya Admin Mitra)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="admin_mitra" class="col-sm-3 col-form-label">Admin Peserta Rapat
                                        Mitra</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="admin_mitra"
                                            id="admin_mitra">
                                        <div class="form-text">(Tanya Admin Mitra)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_pks_khs" class="col-sm-3 col-form-label">Nomor PKS KHS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="no_pks_khs"
                                            id="no_pks_khs">
                                        <div class="form-text">(Tanya Admin Mitra)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pks_khs" class="col-sm-3 col-form-label">PKS KHS (Dasar Pelaksanaan)</label>
                                    <div class="col-sm-9">
                                        {{-- <input type="text" class="form-control" name="pks_khs" id="pks_khs"> --}}
                                        <textarea class="form-control" name="pks_khs" id="pks_khs"></textarea>
                                        <div class="form-text">(Di sesuaikan dengan KHS)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tgl_pks_khs" class="col-sm-3 col-form-label">Tanggal PKS KHS</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="tgl_pks_khs"
                                            id="tgl_pks_khs">
                                        <div class="form-text">(Tanya Admin Mitra)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_nde" class="col-sm-3 col-form-label">Nomor NDE Pelimpahan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="no_nde" id="no_nde">
                                        <div class="form-text">(Cek di NDE Pelimpahan)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tgl_nde" class="col-sm-3 col-form-label">Tanggal NDE
                                        Pelimpahan</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="tgl_nde" id="tgl_nde">
                                        <div class="form-text">(Cek di NDE Pelimpahan)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="perihal_nde" class="col-sm-3 col-form-label">Perihal NDE
                                        Pelimpahan</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="perihal_nde" id="perihal_nde" disabled></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_juspeng_risapat" class="col-sm-3 col-form-label">Nomor Justifikasi
                                        Pengadaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="no_juspeng_risapat"
                                            id="no_juspeng_risapat" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="undangan_lisan" class="col-sm-3 col-form-label">Undangan Lisan Rapat
                                        Finalisasi</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="undangan_lisan" id="undangan_lisan" disabled></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nilai_sp" class="col-sm-3 col-form-label">Nilai Surat Pesanan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nilai_sp" id="nilai_sp"
                                            oninput="formatRupiah('nilai_sp')">
                                        <input type="hidden" class="form-control" name="nilai_sp_hidden"
                                            id="nilai_sp_hidden">
                                        <div class="form-text">(Cek di PO dan nanti hasil Word jangan lupa dipisah
                                            koma)</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="terbilang_sp" class="col-sm-3 col-form-label">Terbilang Nilai Surat
                                        Pesanan</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="terbilang_sp" id="terbilang_sp"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nilai_sp_ppn" class="col-sm-3 col-form-label">Nilai Surat Pesanan
                                        Setelah
                                        PPN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nilai_sp_ppn"
                                            id="nilai_sp_ppn" disabled>
                                        <div class="form-text">(Nanti hasil Word jangan lupa dipisah koma)</div>
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <label for="terbilang_sp_ppn" class="col-sm-3 col-form-label">Terbilang Nilai
                                        Surat
                                        Pesanan
                                        Setelah PPN</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="terbilang_sp_ppn" id="terbilang_sp_ppn"></textarea>
                                    </div>
                                </div> --}}
                                <div class="row mb-3">
                                    <label for="jabatan_ketua_mitra" class="col-sm-3 col-form-label">Jabatan Ketua
                                        Mitra
                                        (TTD)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="jabatan_ketua_mitra"
                                            id="jabatan_ketua_mitra">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pihak_telkom" class="col-sm-3 col-form-label">Pihak Telkom (TTD)</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" onchange="telkom()"
                                            aria-label="Default select example" id="pihak_telkom"
                                            name="pihak_telkom">
                                            <option>Pihak Telkom</option>
                                            <option value="RUDI ENDARYANTO">RUDI ENDARYANTO</option>
                                            <option value="GATRA DI YOGA TAMA">GATRA DI YOGA TAMA</option>
                                            <option value="NUGRAHA BASUKI">NUGRAHA BASUKI</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                        <div class="form-text">Lihat di juskeb</div>
                                    </div>
                                </div>
                                <div style="display: none" id="lainnya">
                                    <div class="row mb-3">
                                        <label for="nama_pihak_telkom" class="col-sm-3 col-form-label">Nama Pihak
                                            Telkom</label>
                                        <div class="col-sm-9">
                                            {{-- <input type="hidden" class="form-control" name="nama_pihak_telkom2"
                                                id="nama_pihak_telkom2"> --}}
                                            <input type="text" class="form-control" name="nama_pihak_telkom"
                                                id="nama_pihak_telkom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nik_pihak_telkom" class="col-sm-3 col-form-label">NIK Pihak
                                        Telkom</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nik_pihak_telkom"
                                            id="nik_pihak_telkom">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jabatan_pihak_telkom" class="col-sm-3 col-form-label">Jabatan Pihak
                                        Telkom</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="jabatan_pihak_telkom"
                                            id="jabatan_pihak_telkom">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-4">
                    {{-- Lampiran Risapat --}}
                    <div class="card mb-4">
                        <div class="card-header fw-bold">
                            Lampiran Risalah Rapat (Risapat)
                        </div>
                        <div class="card-body">
                            {{-- <h5 class="card-title">Special title treatment</h5> --}}
                            <div class="row mb-3">
                                <label for="judul_lampiran" class="col-sm-3 col-form-label">Judul Risapat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="judul_lampiran" id="judul_lampiran" disabled></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nilai_sp_lampiran" class="col-sm-3 col-form-label">Nilai Surat
                                    Pesanan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nilai_sp_lampiran"
                                        id="nilai_sp_lampiran" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ppn_aja" class="col-sm-3 col-form-label">Nilai PPN Saja</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ppn_aja" id="ppn_aja"
                                        disabled>
                                    <div class="form-text">(Nanti hasil Word jangan lupa dipisah koma)</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nilai_sp_ppn_lampiran" class="col-sm-3 col-form-label">Nilai Setelah
                                    PPN</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nilai_sp_ppn_lampiran"
                                        id="nilai_sp_ppn_lampiran" disabled>
                                    <div class="form-text">(Nanti hasil Word jangan lupa dipisah koma)</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Lampiran Risapat --}}
                    <div class="card">
                        <div class="card-header fw-bold">
                            Lampiran 2 Risalah Rapat (Risapat)
                        </div>
                        <div class="card-body">
                            {{-- <h5 class="card-title">Special title treatment</h5> --}}
                            <div class="row mb-3">
                                <label for="no_risapat3" class="col-sm-3 col-form-label">Nomor Risapat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_risapat3" id="no_risapat3"
                                        disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl_risapat4" class="col-sm-3 col-form-label">Tanggal Risapat</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tgl_risapat4" id="tgl_risapat4"
                                        disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="judul_lampiran2" class="col-sm-3 col-form-label">Judul Risapat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="judul_lampiran2" id="judul_lampiran2" disabled></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="mitra_usaha3" class="col-sm-3 col-form-label">Mitra Usaha</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="mitra_usaha3" id="mitra_usaha3"
                                        disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jabatan_ketua_mitra2" class="col-sm-3 col-form-label">Jabatan Ketua
                                    Mitra</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jabatan_ketua_mitra2"
                                        id="jabatan_ketua_mitra2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Justifikasi Pengadaan --}}
            <div class="card mb-5">
                <div class="card-header fw-bold">
                    (1) Justifikasi Pengadaan
                </div>
                <div class="card-body">
                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                    <div class="row mb-3">
                        <label for="no_juspeng" class="col-sm-2 col-form-label">Nomor Justifikasi Pengadaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_juspeng" id="no_juspeng"
                                value="C.TEL. .... /LG 200/TR6-W500/2023">
                            <div class="form-text">(Minta Sekretaris)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama_kegiatan" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="nama_kegiatan" id="nama_kegiatan" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_akun" class="col-sm-2 col-form-label">No Akun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_akun" id="no_akun">
                            <div class="form-text">(Cek di Juskeb / Ref NDE)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jenis_anggaran" class="col-sm-2 col-form-label">Jenis Anggaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_anggaran" id="jenis_anggaran">
                            <div class="form-text">(Cek di Juskeb)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="total_anggaran" class="col-sm-2 col-form-label">Total Anggaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="total_anggaran" id="total_anggaran"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="terbilang_anggaran" class="col-sm-2 col-form-label">Terbilang Anggaran</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="terbilang_anggaran" id="terbilang_anggaran" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="saat_penggunaan" class="col-sm-2 col-form-label">Saat Penggunaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="saat_penggunaan" id="saat_penggunaan">
                            <div class="form-text">(Cek di Juskeb)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_juskeb" class="col-sm-2 col-form-label">Nomor Justifikasi Kebutuhan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_juskeb" id="no_juskeb">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_juskeb" class="col-sm-2 col-form-label">Tanggal Justifikasi Kebutuhan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_juskeb" id="tgl_juskeb">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="perihal_juskeb" class="col-sm-2 col-form-label">Perihal Justifikasi
                            Kebutuhan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="perihal_juskeb" id="perihal_juskeb">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_nde2" class="col-sm-2 col-form-label">Nomor NDE Pelimpahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_nde2" id="no_nde2" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_nde2" class="col-sm-2 col-form-label">Tanggal NDE Pelimpahan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_nde2" id="tgl_nde2" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="perihal_nde2" class="col-sm-2 col-form-label">Perihal NDE Pelimpahan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="perihal_nde2" id="perihal_nde2" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tersedia_anggaran" class="col-sm-2 col-form-label">Tersedia Anggaran Pada</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tersedia_anggaran"
                                id="tersedia_anggaran" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_pr" class="col-sm-2 col-form-label">Nomor PR</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="no_pr" id="no_pr">
                            <div class="form-text">(Cek di PR)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_pr" class="col-sm-2 col-form-label">Tanggal PR</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_pr" id="tgl_pr">
                            <div class="form-text">(Cek di PR)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mitra_usaha" class="col-sm-2 col-form-label">Mitra Usaha</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mitra_usaha" id="mitra_usaha" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_pks_khs2" class="col-sm-2 col-form-label">Nomor PKS KHS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_pks_khs2" id="no_pks_khs2" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pks_khs2" class="col-sm-2 col-form-label">PKS KHS (Dasar Pelaksanaan)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="pks_khs2" id="pks_khs2" disabled></textarea>                            
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_pks_khs2" class="col-sm-2 col-form-label">Tanggal PKS KHS</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_pks_khs2" id="tgl_pks_khs2"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="waktu_penggunaan" class="col-sm-2 col-form-label">Waktu Penggunaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="waktu_penggunaan" id="waktu_penggunaan"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lamp_no_pr" class="col-sm-2 col-form-label">Lampiran Nomor PR</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="lamp_no_pr" id="lamp_no_pr" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lamp_tgl_pr" class="col-sm-2 col-form-label">Lampiran Tanggal PR</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="lamp_tgl_pr" id="lamp_tgl_pr" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_ttd" class="col-sm-2 col-form-label">Tanggal TTD</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_ttd" id="tgl_ttd">
                        </div>
                    </div>
                </div>
            </div>

              {{-- Laporan Pemberi Tugas --}}
              <div class="card mb-5">
                <div class="card-header fw-bold">
                    (3) Surat Laporan Pemberi Tugas
                </div>
                <div class="card-body">
                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                    <div class="row mb-3">
                        <label for="no_surat_laporan" class="col-sm-2 col-form-label">Nomor Surat Laporan Pemberi
                            Tugas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_surat_laporan" id="no_surat_laporan"
                                value="C.TEL. ... /LG 200/TR6-W501/2023">
                            <div class="form-text">(Minta Sekretaris)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="judul_pengadaan" class="col-sm-2 col-form-label">Judul Pengadaan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="judul_pengadaan" id="judul_pengadaan" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_nde3" class="col-sm-2 col-form-label">Nomor NDE Pelimpahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_nde3" id="no_nde3" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_nde3" class="col-sm-2 col-form-label">Tanggal NDE Pelimpahan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_nde3" id="tgl_nde3" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="perihal_nde3" class="col-sm-2 col-form-label">Perihal NDE Pelimpahan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="perihal_nde3" id="perihal_nde3" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_risapat3" class="col-sm-2 col-form-label">Tanggal Risalah Rapat</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_risapat3" id="tgl_risapat3"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mitra_usaha2" class="col-sm-2 col-form-label">Mitra Usaha</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mitra_usaha2" id="mitra_usaha2"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="total_anggaran2" class="col-sm-2 col-form-label">Total Anggaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="total_anggaran2" id="total_anggaran2"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="terbilang_anggaran2" class="col-sm-2 col-form-label">Terbilang Anggaran</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="terbilang_anggaran2" id="terbilang_anggaran2" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mgr_terkait" class="col-sm-2 col-form-label">Manager Terkait</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mgr_terkait"
                                id="mgr_terkait">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_pembuatan_laporan" class="col-sm-2 col-form-label">Tanggal Pembuatan
                            Laporan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_pembuatan_laporan"
                                id="tgl_pembuatan_laporan">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Surat Penetapan --}}
            <div class="card mb-3">
                <div class="card-header fw-bold">
                    (4) Surat Penetapan
                </div>
                <div class="card-body">
                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                    <div class="row mb-3">
                        <label for="no_surat" class="col-sm-2 col-form-label">Nomor Surat Penetapan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_surat" id="no_surat"
                                value="TEL. .... /LG 200/TR6-W500/2023">
                            <div class="form-text">(Minta Sekretaris)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_surat" class="col-sm-2 col-form-label">Tanggal Surat Penetapan</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_surat" id="tgl_surat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tujuan" class="col-sm-2 col-form-label">Tujuan Surat Penetapan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tujuan" id="tujuan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat_jalan" class="col-sm-2 col-form-label">Alamat Tujuan (Jalan)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat_jalan" id="alamat_jalan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat_kota" class="col-sm-2 col-form-label">Alamat Tujuan (Kota)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat_kota" id="alamat_kota">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="perihal" id="perihal" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_pks_khs3" class="col-sm-2 col-form-label">Nomor PKS KHS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_pks_khs3" id="no_pks_khs3" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pks_khs3" class="col-sm-2 col-form-label">PKS KHS (Dasar Pelaksanaan)</label>
                        <div class="col-sm-10">
                            {{-- <input type="text" class="form-control" name="pks_khs3" id="pks_khs3" disabled> --}}
                            <textarea class="form-control" name="pks_khs3" id="pks_khs3" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_pks_khs3" class="col-sm-2 col-form-label">Tanggal PKS KHS</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_pks_khs3" id="tgl_pks_khs3"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="perihal_risapat" class="col-sm-2 col-form-label">Perihal Risapat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="perihal_risapat" id="perihal_risapat" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_risapat2" class="col-sm-2 col-form-label">Nomor Risapat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_risapat2" id="no_risapat2" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tgl_risapat2" class="col-sm-2 col-form-label">Tanggal Risapat</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_risapat2" id="tgl_risapat2"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lingkup_pekerjaan" class="col-sm-2 col-form-label">Lingkup Pekerjaan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="lingkup_pekerjaan" id="lingkup_pekerjaan" disabled></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga_borongan" class="col-sm-2 col-form-label">Harga Borongan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="harga_borongan" id="harga_borongan"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="terbilang_harga_borongan" class="col-sm-2 col-form-label">Terbilang Harga
                            Borongan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="terbilang_harga_borongan"
                                id="terbilang_harga_borongan" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="borongan_ppn" class="col-sm-2 col-form-label">Harga Borongan Setelah
                            PPN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="borongan_ppn" id="borongan_ppn"
                                disabled>
                            <div class="form-text">(Nanti hasil Word jangan lupa dipisah koma)</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ppn_aja2" class="col-sm-2 col-form-label">Nilai PPN Saja</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ppn_aja2" id="ppn_aja2" disabled>
                            <div class="form-text">(Nanti hasil Word jangan lupa dipisah koma)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <button type="submit" class="btn btn-danger" onclick="onSubmit()">Submit</button>
            </form>
        </div>

        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="container">
            <span class="text-body-secondary">&copy; Performance, Risk, & QoS. 2023</span>
        </div>
    </footer>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        function onSubmit() {
            // document.getElementById('perihal_nde').disabled = false;
            document.getElementById('nilai_sp_ppn').disabled = false;
            document.getElementById('ppn_aja').disabled = false;

            setTimeout(function() {
                location.reload(true); // true parameter forces a reload from the server, not from the cache
            }, 5000);
            // down.innerHTML = "Disabled Attribute removed";
        }
        // PKS KHS (Dasar Pelaksanaan)
        function val() {
            x = document.getElementById("peserta_rapat").value;
            y = document.getElementById("mitra_lainnya");
            z = document.getElementById("peserta_rapat_lainnya").value;
            switch (x) {
                case "PT. TELKOM AKSES":
                    document.getElementById("pks_khs").value =
                        "Quality Enhancement (QE) Akses antara PT Telkom Indonesia (Persero), Tbk dengan " + x;
                    document.getElementById("pks_khs2").value =
                        "Quality Enhancement (QE) Akses antara PT Telkom Indonesia (Persero), Tbk dengan " + x;
                    document.getElementById("pks_khs3").value =
                        "Quality Enhancement (QE) Akses antara PT Telkom Indonesia (Persero), Tbk dengan " + x;
                    document.getElementById("no_pks_khs").value =
                        "K.TEL.031/HK.810/OPS-10000000/2021";
                    document.getElementById("no_pks_khs2").value =
                        "K.TEL.031/HK.810/OPS-10000000/2021";
                    document.getElementById("no_pks_khs3").value =
                        "K.TEL.031/HK.810/OPS-10000000/2021";
                    document.getElementById("tgl_pks_khs").value =
                        "2021-12-03";
                    document.getElementById("tgl_pks_khs2").value =
                        "2021-12-03";
                    document.getElementById("tgl_pks_khs3").value =
                        "2021-12-03";
                    document.getElementById("alamat_jalan").value =
                        "Jalan M.T. Haryono (Ring Road) Nomor 169";
                    document.getElementById("alamat_kota").value =
                        "Balikpapan";
                    document.getElementById("tujuan").value =
                        "GM Program Optimization and Migration";
                    document.getElementById("jabatan_ketua_mitra").value =
                        "MGR OPERATION PALANGKARAYA";
                    document.getElementById("jabatan_ketua_mitra2").value =
                        "MGR OPERATION PALANGKARAYA";
                    y.style.display = 'none';
                    break;
                case "KOPERASI KARYAWAN TELKOM KALTENG ICC":
                    document.getElementById("pks_khs").value =
                        "Outside Plant Fiber Optic (OSP-FO) Akses antara PT Telkom Indonesia (Persero), Tbk dengan " + x;
                    document.getElementById("pks_khs2").value =
                        "Outside Plant Fiber Optic (OSP-FO) Akses antara PT Telkom Indonesia (Persero), Tbk dengan " + x;
                    document.getElementById("pks_khs3").value =
                        "Outside Plant Fiber Optic (OSP-FO) Akses antara PT Telkom Indonesia (Persero), Tbk dengan " + x;
                    document.getElementById("no_pks_khs").value =
                        "K.TEL.005139/HK.810/DR6-10000000/2023";
                    document.getElementById("no_pks_khs2").value =
                        "K.TEL.005139/HK.810/DR6-10000000/2023";
                    document.getElementById("no_pks_khs3").value =
                        "K.TEL.005139/HK.810/DR6-10000000/2023";
                    document.getElementById("tgl_pks_khs").value =
                        "2023-09-18";
                    document.getElementById("tgl_pks_khs2").value =
                        "2023-09-18";
                    document.getElementById("tgl_pks_khs3").value =
                        "2023-09-18";
                    document.getElementById("alamat_jalan").value =
                        "Jalan A.Yani no 45";
                    document.getElementById("alamat_kota").value =
                        "Langkai, Pahandut, Kota Palangka Raya, Kalimantan Tengah";
                    document.getElementById("tujuan").value =
                        "KETUA " + x;
                    document.getElementById("jabatan_ketua_mitra").value =
                        "KETUA " + x;
                    document.getElementById("jabatan_ketua_mitra2").value =
                        "KETUA " + x;
                    y.style.display = 'none';
                    break;
                case "Mitra Lainnya":
                    y.style.display = 'block';
                    document.getElementById("alamat_jalan").value =
                        " ";
                    document.getElementById("alamat_kota").value =
                        " ";
                    document.getElementById("tujuan").value =
                        "..." + z;
                    document.getElementById("jabatan_ketua_mitra").value =
                        "... " + z;
                    document.getElementById("jabatan_ketua_mitra2").value =
                        "... " + z;
                    document.getElementById("mitra_usaha").value = z;
                    document.getElementById("mitra_usaha2").value = z;
                    document.getElementById("mitra_usaha3").value = z;
                    document.getElementById("pks_khs").value =
                        "... antara PT Telkom Indonesia (Persero), Tbk dengan ...";
                    document.getElementById("pks_khs2").value =
                        "... antara PT Telkom Indonesia (Persero), Tbk dengan ...";
                    document.getElementById("pks_khs3").value =
                        "... antara PT Telkom Indonesia (Persero), Tbk dengan ...";
                    document.getElementById("no_pks_khs").value =
                        " ";
                    document.getElementById("no_pks_khs2").value =
                        " ";
                    document.getElementById("no_pks_khs3").value =
                        " ";
                    document.getElementById("tgl_pks_khs").value =
                        " ";
                    document.getElementById("tgl_pks_khs2").value =
                        " ";
                    document.getElementById("tgl_pks_khs3").value =
                        " ";
                    break;
                default:
                    document.getElementById("pks_khs").value = "";
            }
        }

        function telkom() {
            x = document.getElementById("pihak_telkom").value;
            // console.log(x);
            y = document.getElementById("lainnya");
            // z = document.getElementById("nama_pihak_telkom").value;
            switch (x) {
                case "RUDI ENDARYANTO":
                    document.getElementById("nik_pihak_telkom").value =
                        "710161";
                    document.getElementById("jabatan_pihak_telkom").value =
                        "MGR BGES, MBB, FBB ACCESS & SERVICE OPERATION";
                    document.getElementById("mgr_terkait").value =
                        "Rudi Endaryanto";
                    y.style.display = 'none';
                    break;
                case "GATRA DI YOGA TAMA":
                    document.getElementById("nik_pihak_telkom").value =
                        "850022";
                    document.getElementById("jabatan_pihak_telkom").value =
                        "MGR ACCESS OPTIMA, MAINTENANCE, QE & DAMAN";
                    document.getElementById("mgr_terkait").value =
                        "Gatra Di Yoga Tama";
                    y.style.display = 'none';
                    break;
                case "NUGRAHA BASUKI":
                    document.getElementById("nik_pihak_telkom").value =
                        "690281";
                    document.getElementById("jabatan_pihak_telkom").value =
                        "MGR NETWORK AREA & IS OPERATION";
                    document.getElementById("mgr_terkait").value =
                        "Nugraha Basuki";
                    y.style.display = 'none';
                    break;
                case "Lainnya":
                    y.style.display = 'block';
                    document.getElementById("nik_pihak_telkom").value =
                        " ";
                    document.getElementById("jabatan_pihak_telkom").value =
                        " ";
                    document.getElementById("mgr_terkait").value = " ";
                    // document.getElementById("mgr_terkait").value = z;
                    break;
            }
        }

        // Mendapatkan referensi elemen input dan output
        const judul_risapat = document.getElementById('judul_risapat');
        const perihal_nde = document.getElementById('perihal_nde');
        const undangan_lisan = document.getElementById('undangan_lisan');
        const nama_kegiatan = document.getElementById('nama_kegiatan');
        const no_juspeng = document.getElementById('no_juspeng');
        const no_juspeng_risapat = document.getElementById('no_juspeng_risapat');
        const total_anggaran = document.getElementById('total_anggaran');
        const total_anggaran2 = document.getElementById('total_anggaran2');
        const terbilang_sp = document.getElementById('terbilang_sp');
        const terbilang_anggaran = document.getElementById('terbilang_anggaran');
        const terbilang_anggaran2 = document.getElementById('terbilang_anggaran2');
        const no_nde = document.getElementById('no_nde');
        const no_nde2 = document.getElementById('no_nde2');
        const no_nde3 = document.getElementById('no_nde3');
        const tgl_nde = document.getElementById('tgl_nde');
        const tgl_nde2 = document.getElementById('tgl_nde2');
        const tgl_nde3 = document.getElementById('tgl_nde3');
        const perihal_nde2 = document.getElementById('perihal_nde2');
        const perihal_nde3 = document.getElementById('perihal_nde3');
        const saat_penggunaan = document.getElementById('saat_penggunaan');
        const tersedia_anggaran = document.getElementById('tersedia_anggaran');
        const peserta_rapat = document.getElementById('peserta_rapat');
        const peserta_rapat_lainnya = document.getElementById('peserta_rapat_lainnya');
        const mitra_usaha = document.getElementById('mitra_usaha');
        const mitra_usaha2 = document.getElementById('mitra_usaha2');
        const mitra_usaha3 = document.getElementById('mitra_usaha3');
        const pks_khs = document.getElementById('pks_khs');
        const pks_khs2 = document.getElementById('pks_khs2');
        const pks_khs3 = document.getElementById('pks_khs3');
        const no_pks_khs = document.getElementById('no_pks_khs');
        const no_pks_khs2 = document.getElementById('no_pks_khs2');
        const no_pks_khs3 = document.getElementById('no_pks_khs3');
        const tgl_pks_khs = document.getElementById('tgl_pks_khs');
        const tgl_pks_khs2 = document.getElementById('tgl_pks_khs2');
        const tgl_pks_khs3 = document.getElementById('tgl_pks_khs3');
        const waktu_penggunaan = document.getElementById('waktu_penggunaan');
        const no_pr = document.getElementById('no_pr');
        const lamp_no_pr = document.getElementById('lamp_no_pr');
        const tgl_pr = document.getElementById('tgl_pr');
        const lamp_tgl_pr = document.getElementById('lamp_tgl_pr');
        // const tujuan = document.getElementById('tujuan');
        const perihal = document.getElementById('perihal');
        const perihal_risapat = document.getElementById('perihal_risapat');
        const no_risapat = document.getElementById('no_risapat');
        const no_risapat2 = document.getElementById('no_risapat2');
        const no_risapat3 = document.getElementById('no_risapat3');
        const tgl_risapat = document.getElementById('tgl_risapat');
        const tgl_risapat2 = document.getElementById('tgl_risapat2');
        const tgl_risapat3 = document.getElementById('tgl_risapat3');
        const tgl_risapat4 = document.getElementById('tgl_risapat4');
        const lingkup_pekerjaan = document.getElementById('lingkup_pekerjaan');
        const harga_borongan = document.getElementById('harga_borongan');
        const terbilang_harga_borongan = document.getElementById('terbilang_harga_borongan');
        // const terbilang_sp_ppn = document.getElementById('terbilang_sp_ppn');
        const terbilang_borongan_ppn = document.getElementById('terbilang_borongan_ppn');
        const ppn_aja = document.getElementById('ppn_aja');
        const judul_lampiran = document.getElementById('judul_lampiran');
        const judul_lampiran2 = document.getElementById('judul_lampiran2');
        const judul_pengadaan = document.getElementById('judul_pengadaan');
        const tgl_ttd = document.getElementById('tgl_ttd');
        const tgl_pembuatan_laporan = document.getElementById('tgl_pembuatan_laporan');
        const nama_pihak_telkom = document.getElementById('nama_pihak_telkom');
        const mgr_terkait = document.getElementById('mgr_terkait');


        // Menambahkan event listener untuk mendengarkan perubahan pada input
        judul_risapat.addEventListener('input', function() {
            // Memperbarui teks pada elemen output secara otomatis
            perihal_nde.value = judul_risapat.value;
            undangan_lisan.value = judul_risapat.value;
            nama_kegiatan.value = judul_risapat.value;
            perihal_nde2.value = judul_risapat.value;
            perihal_nde3.value = judul_risapat.value;
            perihal.value = judul_risapat.value;
            perihal_risapat.value = judul_risapat.value;
            lingkup_pekerjaan.value = judul_risapat.value;
            judul_lampiran.value = judul_risapat.value;
            judul_lampiran2.value = judul_risapat.value;
            judul_pengadaan.value = judul_risapat.value;
        });
        no_juspeng.addEventListener('input', function() {
            no_juspeng_risapat.value = no_juspeng.value;
        });
        pks_khs.addEventListener('input', function() {
            pks_khs2.value = pks_khs.value;
            pks_khs3.value = pks_khs.value;
        });
        terbilang_sp.addEventListener('input', function() {
            terbilang_anggaran.value = terbilang_sp.value;
            terbilang_anggaran2.value = terbilang_sp.value;
            terbilang_harga_borongan.value = terbilang_sp.value;
        });
        no_nde.addEventListener('input', function() {
            no_nde2.value = no_nde.value;
            no_nde3.value = no_nde.value;
        });
        tgl_nde.addEventListener('input', function() {
            tgl_nde2.value = tgl_nde.value;
            tgl_nde3.value = tgl_nde.value;
        });
        saat_penggunaan.addEventListener('input', function() {
            tersedia_anggaran.value = saat_penggunaan.value;
            waktu_penggunaan.value = saat_penggunaan.value;
        });
        // console.log(peserta_rapat.value);

        peserta_rapat.addEventListener('input', function() {
            if (peserta_rapat.value === "Mitra Lainnya") {
                peserta_rapat_lainnya.addEventListener('input', function() {
                    mitra_usaha.value = peserta_rapat_lainnya.value;
                    mitra_usaha2.value = peserta_rapat_lainnya.value;
                    mitra_usaha3.value = peserta_rapat_lainnya.value;
                    document.getElementById("pks_khs").value =
                        "... antara PT Telkom Indonesia (Persero), Tbk dengan " + peserta_rapat_lainnya
                        .value;
                    document.getElementById("pks_khs2").value =
                        "... antara PT Telkom Indonesia (Persero), Tbk dengan " + peserta_rapat_lainnya
                        .value;
                    document.getElementById("pks_khs3").value =
                        "... antara PT Telkom Indonesia (Persero), Tbk dengan " + peserta_rapat_lainnya
                        .value;
                    document.getElementById("jabatan_ketua_mitra").value =
                        "... " + peserta_rapat_lainnya.value;
                    document.getElementById("jabatan_ketua_mitra2").value =
                        "... " + peserta_rapat_lainnya.value;
                    document.getElementById("mitra_usaha").value =
                        peserta_rapat_lainnya.value;
                    document.getElementById("mitra_usaha2").value =
                        peserta_rapat_lainnya.value;
                    document.getElementById("mitra_usaha3").value =
                        peserta_rapat_lainnya.value;
                    document.getElementById("tujuan").value =
                        "... " + peserta_rapat_lainnya.value;
                    // tujuan.value = "KETUA " + peserta_rapat.value;
                });
            } else {
                mitra_usaha.value = peserta_rapat.value;
                mitra_usaha2.value = peserta_rapat.value;
                mitra_usaha3.value = peserta_rapat.value;
            }
            // tujuan.value = "KETUA " + peserta_rapat.value;
        });
        pks_khs.addEventListener('input', function() {
            pks_khs2.value = pks_khs.value;
            pks_khs3.value = pks_khs.value;
        });
        no_pks_khs.addEventListener('input', function() {
            no_pks_khs2.value = no_pks_khs.value;
            no_pks_khs3.value = no_pks_khs.value;
        });
        tgl_pks_khs.addEventListener('input', function() {
            tgl_pks_khs2.value = tgl_pks_khs.value;
            tgl_pks_khs3.value = tgl_pks_khs.value;
        });
        no_pr.addEventListener('input', function() {
            lamp_no_pr.value = no_pr.value;
        });
        tgl_pr.addEventListener('input', function() {
            lamp_tgl_pr.value = tgl_pr.value;
        });
        no_risapat.addEventListener('input', function() {
            no_risapat2.value = no_risapat.value;
            no_risapat3.value = no_risapat.value;
        });
        tgl_risapat.addEventListener('input', function() {
            tgl_risapat2.value = tgl_risapat.value;
            tgl_risapat3.value = tgl_risapat.value;
            tgl_risapat4.value = tgl_risapat.value;
        });
        // terbilang_sp_ppn.addEventListener('input', function() {
        //     terbilang_borongan_ppn.value = terbilang_sp_ppn.value;
        // });
        tgl_ttd.addEventListener('input', function() {
            tgl_pembuatan_laporan.value = tgl_ttd.value;
        });
        nama_pihak_telkom.addEventListener('input', function() {
            mgr_terkait.value = nama_pihak_telkom.value;
        });


        // Nilai SP setelah PPN
        const nilai_sp = document.getElementById('nilai_sp');
        const nilai_sp_hidden = document.getElementById('nilai_sp_hidden');
        const nilai_sp_ppn = document.getElementById('nilai_sp_ppn');
        const borongan_ppn = document.getElementById('borongan_ppn');
        const nilai_sp_lampiran = document.getElementById('nilai_sp_lampiran');
        const nilai_sp_ppn_lampiran = document.getElementById('nilai_sp_ppn_lampiran');
        const ppn_aja2 = document.getElementById('ppn_aja2');

        nilai_sp.addEventListener('input', function() {
            let nilai_sp_number = nilai_sp.value;
            total_anggaran.value = nilai_sp_number;
            total_anggaran2.value = nilai_sp_number;
            harga_borongan.value = nilai_sp_number;
            nilai_sp_lampiran.value = nilai_sp_number;
            // Mendapatkan nilai dari input setiap kali input berubah
            const nilai_sp_2 = parseFloat(nilai_sp_hidden.value);

            // Memastikan nilai_sp_2 adalah angka yang valid
            if (!isNaN(nilai_sp_2)) {
                var ppn = nilai_sp_2 * 0.11;
                var ppn2 = ppn.toString();
                var ppn_tanpa_desimal = ppn2.substr(0, ppn2.indexOf('.'));

                var hasil_ppn = nilai_sp_2 + ppn;
                var hasil_ppn = hasil_ppn.toString();
                var hasil_ppn_tanpa_desimal = hasil_ppn.substr(0, hasil_ppn.indexOf('.'));
                
                var hasil_ppn_tanpa_desimal = parseInt(hasil_ppn_tanpa_desimal.replace(/[^\d]/g, ''));
                var ppn_tanpa_desimal = parseInt(ppn_tanpa_desimal.replace(/[^\d]/g, ''));

                // Memastikan nilai adalah angka yang valid
                if (!isNaN(hasil_ppn_tanpa_desimal) && !isNaN(ppn_tanpa_desimal)) {
                    // Memformat nilai sebagai Rupiah dengan pemisah ribuan dan menampilkan kembali ke input
                    hasil_ppn_tanpa_desimal = hasil_ppn_tanpa_desimal.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&,');
                    ppn_tanpa_desimal = ppn_tanpa_desimal.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&,');
                } else {
                    // Menampilkan pesan jika input tidak valid
                    hasil_ppn_tanpa_desimal = 'Input tidak valid';
                    ppn_tanpa_desimal = 'Input tidak valid';
                }

                // console.log(parseInt(hasil_ppn_tanpa_desimal));
                // hasil_ppn = Math.floor(hasil_ppn);
                // formatRupiah2(hasil_ppn);

                // Menampilkan hasil_ppn pada elemen dengan id 'nilai_sp_ppn'
                nilai_sp_ppn.value = hasil_ppn_tanpa_desimal; // Menampilkan dua angka desimal
                borongan_ppn.value = hasil_ppn_tanpa_desimal;
                nilai_sp_ppn_lampiran.value = hasil_ppn_tanpa_desimal;
                
                ppn_aja.value = ppn_tanpa_desimal;
                ppn_aja2.value = ppn_tanpa_desimal;
            } else {
                // Menampilkan pesan jika input tidak valid
                nilai_sp_ppn.value = 'Input tidak valid';
                borongan_ppn.value = 'Input tidak valid';
                nilai_sp_ppn_lampiran.value = 'Input tidak valid';
            }
        });

        // Format rupiah
        function formatRupiah(id) {
            // Mendapatkan nilai dari input
            let nilai_sp = document.getElementById(id);
            let nilai_sp_hidden = document.getElementById('nilai_sp_hidden');
            let nominalValue = parseFloat(nilai_sp.value.replace(/[^\d]/g, ''));

            // Memastikan nilai adalah angka yang valid
            if (!isNaN(nominalValue)) {
                // Memformat nilai sebagai Rupiah dengan pemisah ribuan dan menampilkan kembali ke input
                nilai_sp.value = nominalValue.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&,');
                nilai_sp_hidden.value = nominalValue;
            } else {
                // Menampilkan pesan jika input tidak valid
                nilai_sp.value = 'Input tidak valid';
            }
        }
    </script>

</body>

</html>
