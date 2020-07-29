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
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">No. Transaksi</th>
                                <th scope="col" class="sort" data-sort="status">Nominal</th>
                                <th scope="col" class="sort" data-sort="status">Diskon</th>
                                <th scope="col" class="sort" data-sort="status">Total</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Sewa</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Kembali</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="status">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($transaction as $v)
                                <tr>
                                    <td class="budget">
                                        {{ $loop->index + 1}}
                                    </td>

                                    <td class="budget">
                                        {{ $v->no_transaksi }}
                                    </td>

                                    <td class="budget">
                                        {{ number_format($v->nominal, 0, ',', '.') }}
                                    </td>

                                    <td class="budget">
                                        1{{ number_format($v->discount, 0, ',', '.') }}
                                    </td>

                                    <td class="budget">
                                        {{ number_format($v->nominal - $v->discount, 0, ',', '.') }}
                                    </td>

                                    <td class="budget">
                                        {{ $v->tgl_sewa }}
                                    </td>

                                    <td class="budget">
                                        {{ $v->tgl_tempo }}
                                    </td>

                                    <td class="budget">
                                        {{ $v->status }}
                                    </td>

                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">detail</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')


@endsection
