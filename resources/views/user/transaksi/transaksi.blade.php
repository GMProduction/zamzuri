@extends('user.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Transaksi</h6>
                        {{--                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">--}}
                        {{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
                        {{--                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
                        {{--                                <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>--}}
                        {{--                            </ol>--}}
                        {{--                        </nav>--}}
                    </div>

                    <div class="col-lg-8 col-8">
                        <div class="row">

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
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="status">No Transaksi</th>
                                <th scope="col" class="sort" data-sort="status">Nama Barang</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Sewa</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Kembali</th>
                                <th scope="col" class="sort" data-sort="status">Pembayaran</th>
                                <th scope="col" class="sort" data-sort="status">Denda</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
{{--                                <th scope="col" class="sort" data-sort="status">Action</th>--}}
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($transaksi as $t)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$t->transaction->no_transaksi}}</td>
                                    <td>{{$t->product->nama}}</td>
                                    <td>{{$t->transaction->tgl_sewa}}</td>
                                    <td>{{$t->transaction->tgl_tempo}}</td>
                                    <td>{{$t->transaction->nominal}}</td>
                                    <td></td>
                                    <td>{{$t->transaction->status}}</td>
{{--                                    <td>--}}
{{--                                        <a href="" class="btn btn-sm btn-primary">detail</a>--}}
{{--                                    </td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

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
