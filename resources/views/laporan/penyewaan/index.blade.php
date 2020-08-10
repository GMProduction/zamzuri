@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-12 col-12">
                        <h6 class="h2 text-white d-inline-block mb-0">Laporan Data Penyewaan</h6>
                    </div>

                    <div class="col-lg-12 col-12">
                        <form action="/admin/transaksi/cetak" method="get">
                            <div class="row ">
                                <div class="input-daterange datepicker row align-items-center">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control" name="awal" placeholder="Start date" type="text" value="06/18/2020">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control" name="akhir" placeholder="End date" type="text" value="06/22/2020">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 mb-auto">
                                    <button type="submit" class="btn btn-md btn-neutral">Cetak</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tabel Transaksi</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Produk</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Sewa</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Kembali</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="status">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#tabel').DataTable();
        });
    </script>

@endsection
