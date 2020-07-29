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
                <a href="#" id="btn-cekout" class="btn btn-md btn-primary">Check Out</a>
            </div>
        </div>

        <div>Rincian Sewa = <span id="temp-sub">0</span> x ( <span id="lama">0</span> ) Hari = Rp. <span
                id="temp-tot">0</span></div>
        <div class="row">
            <div class="col-6">
                <div class="text-left mt-5">
                    <h2><i class="mr-3" data-feather="twitch"></i>Input Voucher</h2>
                </div>

                <div class="d-block bg-gradient-blue mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                </div>

                <div class="col-lg-12">
                    <div class="card p-3">

                        <div class="form-group">
                            <label for="voucher">Voucher</label>
                            <input type="text" required id="voucher" name="voucher"
                                   class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-8 text-right">
                                <p class="ml-auto mr-3" id="stat-voucher"></p>
                            </div>
                            <div class="col-4 ">
                                <button id="btn-voucher" type="submit" class="btn btn-lg btn-primary">Apply Voucher
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6">
                <div class="text-left mt-5">
                    <h2><i class="mr-3" data-feather="twitch"></i>Total Harga</h2>
                </div>

                <div class="d-block bg-gradient-blue mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                </div>

                <div class="col-lg-12">
                    <div class="card p-3">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="nama">Sub Total</label>
                                <input type="text" readonly id="subTotal" name="subTotal"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="url">Diskon</label>
                                <input type="number" readonly id="diskon" name="diskon"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="url">Total</label>
                                <input type="number" readonly id="total" name="total"
                                       class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')

    <script>
        let subtotal = 0, diskon = 0, total = 0, lama = 0;
        var date_diff_indays = function (date1, date2) {
            dt1 = new Date(date1);
            dt2 = new Date(date2);
            return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
        };

        function hitungTotal() {
            let tgl1 = $('#sewa').val();
            let tgl2 = $('#kembali').val();
            let tempSubTotal = '{{ $subTotal }}';
            lama = date_diff_indays(tgl1, tgl2);
            subtotal = tempSubTotal * lama;
            total = subtotal - diskon;
            $('#subTotal').val(subtotal);
            $('#temp-sub').html(tempSubTotal);
            $('#lama').html(lama);
            $('#temp-tot').html(subtotal);
            $('#diskon').val(diskon);
            $('#total').val(total);
        }

        $(document).ready(function () {
            hitungTotal();
            $('#sewa').on('change', function () {
                hitungTotal();
            });
            $('#kembali').on('change', function () {
                hitungTotal();
            });


            $('#btn-voucher').on('click', async function (e) {
                e.preventDefault();
                let code = $('#voucher').val();
                let res = await $.get('/ajax/voucher?code=' + code);
                if (res['status'] === 200 && res['payload'] !== null) {
                    let amount = res['payload']['nominal'];
                    diskon = amount;
                    $('#stat-voucher').html('Voucher Tersedia senilai Rp. ' + amount);
                    hitungTotal();
                } else {
                    diskon = 0;
                    $('#stat-voucher').html('Voucher Tidak Tersedia')
                    hitungTotal();
                }
            });

            $('#btn-cekout').on('click', async function (e) {
                e.preventDefault();
                let code = $('#voucher').val();
                let data = {
                    '_token': '{{ csrf_token() }}',
                    diskon: $('#diskon').val(),
                    nominal: $('#total').val(),
                    sewa: $('#sewa').val(),
                    kembali: $('#kembali').val(),
                };
                let res = await $.post('/ajax/cekout', data);
                if (res['status'] === 200 && res['payload'] !== null) {
                    let amount = res['payload']['nominal'];
                    diskon = amount;
                    alert('Sewa Berhasil');
                    window.location.href = '/';
                } else {
                    alert('Sewa gagal');
                }
            });
        });
    </script>
@endsection
