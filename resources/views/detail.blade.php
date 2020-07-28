@extends('navbar')
@section('content')

    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-7">
                <img src="{{asset('assets/img/slider/slider3.jpg')}}" style="width: 100%; height: 300px; object-fit: cover">
            </div>

            <div class="col-5">
                <p style="font-size: 30px; font-weight: bold" class="mb-3">Nama Produk</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50" >Deskripsi Panjang Deskripsi Panjang Deskripsi Panjang Deskripsi Panjang Deskripsi Panjang Deskripsi Panjang </p>
                <p style="font-size: 20px; font-weight: bold" class="text-primary mb-5">@rupiahPrefix(100000) /Hari</p>
                <button type="button" class="btn btn-outline-danger"><i data-feather="shopping-cart"></i></button>
                <button type="button" class="btn  btn-primary">Beli Sekarang</button>

            </div>
        </div>

        <div class="d-block bg-gradient-blue" style="height: 3px; width: 300px; margin-top: 50px">

        </div>

        <div class="text-left mt-2">
            <h2>Produk Kami</h2>
        </div>
    </section>




    <section class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="height: 350px">
                    <img class="card-img-top" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Card image cap" style="height: 150px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Nama Produk</h5>
                        <h4 class="card-title text-primary mt-0 mb-1">Rp. 150.000/ hari</h4>
                        <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden">Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang Ini deskripsi yang sangat panjang </p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')


@endsection
