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
                        <div class="dropdown-divider"></div>
                        <h5 class="f-bold mb-2 text-white">Filter Tanggal</h5>
                        <div class="d-flex align-items-center">
                            <input class="form-control w-25" id="tgl1" name="tgl1" type="date">
                            <span class="mr-1 ml-1 text-white"> Sampai Dengan </span>
                            <input class="form-control w-25" id="tgl2" name="tgl2" type="date">
                            <button type="button" onclick="reload()" class="btn btn-md btn-neutral">Cari</button>
                        </div>
                        <h5 class="f-bold mb-0 text-white mt-4">Filter No. Transaksi / Username</h5>
                        <div class="w-100 mt-2">
                            <input class="form-control" id="filter" name="filter" type="text"
                                   label="No. Transaksi / Username">
                        </div>
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
                    <table id="tabel" class="table display">
                        <thead>
                        <tr>
                            <th width="10%">#</th>
                            <th width="20%">No. Transaksi</th>
                            <th width="20%">Username</th>
                            <th width="20%">Tanggal Sewa</th>
                            <th width="20%">Tanggal Tempo</th>
                            <th width="20%">Sub Total</th>
                            <th width="20%">Discount</th>
                            <th width="20%">Total</th>
                        </tr>
                        </thead>
                    </table>
                    <!-- Card footer -->
                    <div class="dropdown-divider"></div>
                    <div class="text-right">
                        <a href="#" onclick="cetak()" class="btn btn-md btn-neutral">
                            <i class="fa fa-print mr-3"></i>Cetak
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="{{ asset('datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        let table;

        function cetak() {
            event.preventDefault();
            let tgl1 = $('#tgl1').val();
            let tgl2 = $('#tgl2').val();
            let filter = $('#filter').val();
            window.open('/admin/laporan/penyewaan/print?tgl1=' + tgl1 + '&tgl2=' + tgl2 + '&filter=' + filter, '_blank');
        }

        function reload() {
            event.preventDefault();
            table.ajax.reload();
        }

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            table = $('#tabel').DataTable({
                "scrollX": true,
                processing: true,
                ajax: {
                    type: 'GET',
                    url: '/admin/laporan/penyewaan/list',
                    'data': function (d) {
                        return $.extend(
                            {},
                            d,
                            {
                                'tgl1': $('#tgl1').val(),
                                'tgl2': $('#tgl2').val(),
                                'filter': $('#filter').val(),
                            }
                        );
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false},
                    {data: 'no_transaksi'},
                    {
                        data: 'cart', render: function (data) {
                            return data[0]['user']['username'];
                        }
                    },
                    {data: 'tgl_sewa'},
                    {data: 'tgl_tempo'},
                    {data: 'nominal'},
                    {data: 'discount'},
                    {
                        data: null, render: function (data, type, row, meta) {
                            return data['nominal'] - data['discount'];
                        }
                    }
                ],

            });
        });
    </script>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}">
@endsection
