@extends('master-top')
@section('title')
    Beranda
@endsection

@section('judul')
    Kompas Indorama
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
                    <h4 style="font-size: 16px; color:lightgoldenrodyellow">Mendorong kemajuan, pertumbuhan, dan
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
                    <div class="block">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="fa fa-building-o text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Berinvestasi untuk masa depan</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="fa fa-users text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Relasi jangka panjang</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="fa fa-male text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Mengutamankan manusia</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="fa fa-trophy text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Terbaik dikelasnya aset & operasi</h4>
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
                    <div class="block block-condensed">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="icon-users text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Bertindak seperti pemilik</h4>
                                <p>penuh semangat, berani, bertanggung jawab, dan strategis</p>
                            </div>
                        </div>
                        <div class="block-footer">
                            <span class="label" style="font-size: 28px;color: darkslategrey;margin-top: 10px;">A</span>
                            <a href="/A" class="btn btn-info pull-right">Buka</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="fa fa-slideshare text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Beradaptasi</h4>
                                <p>terhadap peluang, tantangan, dan ide-ide baru</p>
                            </div>
                        </div>
                        <div class="block-footer">
                            <span class="label" style="font-size: 28px;color: darkslategrey;margin-top: 10px;">B</span>
                            <a href="/B" class="btn btn-info pull-right">Buka</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="fa fa-sign-language text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Menunjukan kepedulian mendalam</h4>
                                <p>untuk kepentingan masyarakat dan bumi kita dengan kepercayaan, martabat, dan kerendahan
                                    hati</p>
                            </div>
                        </div>
                        <div class="block-footer">
                            <span class="label" style="font-size: 28px;color: darkslategrey;margin-top: 10px;">C</span>
                            <a href="/C" class="btn btn-info pull-right">Buka</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="fa fa-send text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Menghasilkan keunggulan</h4>
                                <p>melalui pengetahuan, ketangkasan, inovasi, dan pelaksanaan</p>
                            </div>
                        </div>
                        <div class="block-footer">
                            <span class="label" style="font-size: 28px;color: darkslategrey;margin-top: 10px;">D</span>
                            <a href="/D" class="btn btn-info pull-right">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <h2 style="font-weight: 700">Buku Panduan Kompas Indorama</h2>
        <object data="/file/kompas-indorama.pdf" type="application/pdf" width="100%" height="400"></object>
        <p>Jika file tidak muncul, silahkan <a href="/file/kompas-indorama.pdf"> download</a> Handbook Kompas Indorama <a
                href="/file/kompas-indorama.pdf">disini</a>
        </p>
    </div>
@endsection

@section('konten')
@endsection
@section('footer')
    @TRPL-PEI
@endsection
