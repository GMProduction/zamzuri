@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5">


        <div class="text-left mt-5">
            <h2><i class="mr-3" data-feather="shopping-cart"></i>Cart</h2>
        </div>

        <div class="d-block bg-gradient-blue mb-2" style="height: 3px; width: 300px; margin-top: 20px">

        </div>

        <div class="card">

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
                        <th scope="col" class="sort text-center" data-sort="completion">Total</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($carts as $v)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td class="text-center"><img
                                    src="{{asset('/images/uploads')}} / {{ $v->product->url }}"
                                    style="height: 100px; width: 100px; object-fit: cover"></td>
                            <td class="text-center">{{ $v->product->nama }}</td>
                            <td class="text-center"> {{ $v->qty }}</td>
                            <td class="text-center">{{ number_format($v->harga, 0, ',', '.') }}</td>
                            <td class="text-center">{{ number_format($v->harga * $v->qty, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div class="input-daterange datepicker row align-items-center">
            <div class="col-3 offset-4">
                <p class="mb-1 text-xs">Tanggal Sewa</p>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input id="sewa" class="form-control" placeholder="Start date" type="text" value="06/18/2020">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="mb-1 text-xs">Tanggal Kembali</p>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input id="kembali" class="form-control" placeholder="End date" type="text" value="06/22/2020">
                    </div>
                </div>
            </div>

            <div class="col-lg-2 mt-auto mb-auto ml-auto">
                <a href="/admin/transaksi/cetak" class="btn btn-md btn-primary">Check Out</a>
            </div>
        </div>
    </section>


@endsection

@section('script')

<script>
    $(document).ready(function () {
        // $('#sewa').on('change', function () {
        //     alert($('#sewa').val())
        // });
    });
</script>
@endsection
