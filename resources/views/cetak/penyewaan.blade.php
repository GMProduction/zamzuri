@extends('cetak.index')

@section('content')
    <div class="text-center f-bold report-title">Laporan Penjualan</div>
    <div class="text-center">Dari Tanggal {{ $tgl1 }} sampai dengan {{ $tgl2 }}</div>

    <hr>
    <table id="my-table" class="table display">
        <thead>
        <tr>
            <th>#</th>
            <th>No. Transaksi</th>
            <th width="20%">Username</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Sewa</th>
            <th>Sub TOtal</th>
            <th>Discount</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transaction as $v)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $v->no_transaksi }}</td>
                <td>{{ $v->cart[0]->user->username }}</td>
                <td class="text-right">{{ $v->tgl_sewa }}</td>
                <td class="text-right">{{ $v->tgl_tempo }}</td>
                <td class="text-right">{{ $v->nominal }}</td>
                <td class="text-right">{{ $v->discount }}</td>
                <td class="text-right">{{ $v->nominal - $v->discount}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <hr>
    <div class="text-right" style="font-weight: bold">
        Total Penjualan : {{ $total }}
    </div>
@endsection
