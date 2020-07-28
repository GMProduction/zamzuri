@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data User</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data User</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        {{--                        <a href="/admin/tambahuser" class="btn btn-md btn-neutral">Tambah Data</a>--}}
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
                        <h3 class="mb-0">Tabel User</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort text-center" data-sort="name">#</th>
                                <th scope="col" class="sort text-center" data-sort="budget">Nama User</th>
                                <th scope="col" class="sort text-center" data-sort="budget">Username</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Phone</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Alamat</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Email</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @forelse($user as $u)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{$u->nama}}</td>
                                    <td class="text-center">{{$u->user->username}}</td>
                                    <td class="text-center">{{$u->no_hp}}</td>
                                    <td class="text-center">{{$u->alamat}}</td>
                                    <td class="text-center">{{$u->user->email}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">Belum ada member</td>
                                </tr>
                            @endforelse
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
