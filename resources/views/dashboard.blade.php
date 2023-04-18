@extends('master-top')
@section('title')
    Beranda
@endsection

@section('judul')
    <img src="gambar/head compass.png" width="100%" height="auto" style="max-width: 400px">
@endsection

@section('konten-tanpa-frame')
    <div class="panel panel-biru" style="box-shadow: -2px 2px 4px #888888">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-2">
                    <h3 class="panel-title" style="font-size: 18px"><span class="fa fa-suitcase"></span> Tujuan</h3>
                </div>
                <div class="col-md-9">
                    <h2><strong><span style="color: #c7170e">(</span> Material Esensial. Hidup yang Lebih
                            Baik <span style="color: #c7170e">)</span></strong></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-biru" style="box-shadow: -2px 2px 4px #888888">
        <div class="panel-heading" style="background-color: #c7170e">
            <div class="row">
                <div class="col-md-2">
                    <h3 class="panel-title" style="font-size: 18px;">
                        <span class="fa fa-group"></span> Visi
                    </h3>
                </div>
                <div class="col-md-9">
                    <h3><strong>Perusahaan material pilihan pelanggan dan karyawan</strong></h3>
                    <h4 style="font-size: 16px; color:lightgoldenrodyellow; font-weight: 700">Mendorong kemajuan,
                        pertumbuhan, dan
                        keberlanjutan</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title" style="font-size: 18px;"><span class="fa fa-area-chart"></span> Kemampuan</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="block" style="background-color: #d5d4ca">
                        <div class="tile-basic" style="background-color: #d5d4ca">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Kemampuan1.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="color: darkblue">Berinvestasi untuk masa depan</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block" style="background-color: #d5d4ca">
                        <div class="tile-basic" style="background-color: #d5d4ca">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Kemampuan2.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="color: darkblue">Relasi jangka panjang</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block" style="background-color: #d5d4ca">
                        <div class="tile-basic" style="background-color: #d5d4ca">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Kemampuan3.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="color: darkblue">Mengutamankan manusia</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block" style="background-color: #d5d4ca">
                        <div class="tile-basic" style="background-color: #d5d4ca">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Kemampuan4.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="color: darkblue">Terbaik dikelasnya aset & operasi</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-primary" id="nilai-nilai">
        <div class="panel-heading">
            <h3 class="panel-title" style="font-size: 18px;"><span class="fa fa-heartbeat"></span> Nilai-nilai (Value)
            </h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="block block-condensed" style="padding-bottom: 10px">
                        <div class="tile-basic" style="background-color: #e9e8e3">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Value1.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="font-weight: 700">Bertindak seperti pemilik</h4>
                                <p>penuh semangat, berani, bertanggung jawab, dan strategis</p>
                            </div>

                        </div>
                        <center><a href="/A" class="btn btn-default btn-sm ">Buka</a>
                        </center>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed" style="padding-bottom: 10px">
                        <div class="tile-basic" style="background-color: #e9e8e3">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Value2.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="font-weight: 700">Beradaptasi</h4>
                                <p>terhadap peluang, tantangan, dan ide-ide baru</p>
                            </div>
                        </div>
                        <center><a href="/B" class="btn btn-default btn-sm">Buka</a></center>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed" style="padding-bottom: 10px">
                        <div class="tile-basic" style="background-color: #e9e8e3">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Value3.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="font-weight: 700">Menunjukan kepedulian mendalam</h4>
                                <p>untuk kepentingan masyarakat dan bumi kita dengan kepercayaan, martabat, dan kerendahan
                                    hati</p>
                            </div>
                        </div>
                        <center><a href="/C" class="btn btn-default btn-sm">Buka</a></center>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed" style="padding-bottom: 10px">
                        <div class="tile-basic" style="background-color: #e9e8e3">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Value4.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="font-weight: 700">Menghasilkan keunggulan</h4>
                                <p>melalui pengetahuan, ketangkasan, inovasi, dan pelaksanaan</p>
                            </div>
                        </div>

                        <center><a href="/D" class="btn btn-default btn-sm">Buka</a></center>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary" id="skema">
        <div class="panel-heading">
            <h3 class="panel-title" style="font-size: 18px;"><span class="fa fa-file-text-o"></span> Skema
                Kompetensi
            </h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <center><img src="gambar/Kompas Indorama.png"></center>
                <center><a href="/kompetensi" class="btn btn-default">Kompetensi Global</a>
                    <a href="/profile" class="btn btn-default">Kompetensi Anda</a>
                </center>
            </div>
        </div>
    </div>
@endsection

@section('konten')
@endsection
@section('footer')
    @TRPL-PEI
@endsection
