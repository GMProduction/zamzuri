@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5">


        <div class="text-left mt-5">
            <h2><i class="mr-3" data-feather="shopping-cart"></i>Cart</h2>
        </div>

        <div class="d-block bg-gradient-blue mb-2" style="height: 3px; width: 300px; margin-top: 20px">

        </div>

        <div class="card">
            <!-- Card header -->

            <!-- Light table -->
            <div class="table-responsive">
                <table id="tabel" class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort text-center" data-sort="name">#</th>
                        <th scope="col" class="sort text-center" data-sort="completion">gambar</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Nama Produk</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Qty</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Harga (hari)</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Deskripsi</th>
                    </tr>
                    </thead>
                    <tbody class="list">
{{--                    @foreach($produk as $p)--}}
                        <tr>
                            <td class="text-center"><img src="https://cdn.mos.cms.futurecdn.net/7UKru4akuGz2QcUPp6smqX.jpg" style="height: 100px; width: 100px; object-fit: cover"></td>
                            <td class="text-center">Kamera DSLR</td>
                            <td class="text-center"> 20</td>
                            <td class="text-center"> 2</td>
                            <td class="text-center">@rupiahPrefix(100000)</td>
                            <td class="text-center">Deskripsi</td>

                        </tr>
{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>


            <!-- Card footer -->
        </div>
    </section>


@endsection

@section('script')


@endsection
