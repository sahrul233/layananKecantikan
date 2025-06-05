@extends('layout.template_karyawan')

@section('content')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Dashboard Karyawan</h3>
        </div>
    </div>

    <div class="row">
        <!-- Facial Treatment -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Facial Treatment</p>
                                <h4 class="card-title">0 pelanggan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hair Spa -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Hair Spa</p>
                                <h4 class="card-title">0 pelanggan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manicure & Pedicure -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Manicure & Pedicure</p>
                                <h4 class="card-title">0 pelanggan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Eyelash Extension -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col col-stats ms-3 ms-sm-0">
                            <div class="numbers">
                                <p class="card-category">Eyelash Extension</p>
                                <h4 class="card-title">0 pelanggan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambah layanan lain di sini sesuai kebutuhan -->
    </div>
</div>
@endsection
