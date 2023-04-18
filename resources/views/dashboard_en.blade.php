@extends('master-top_en')
@section('title')
    Home
@endsection

@section('judul')
    <img src="gambar/head compass_en.png" width="100%" height="auto" style="max-width: 400px">
@endsection

@section('konten-tanpa-frame')
    <div class="panel panel-biru" style="box-shadow: -2px 2px 4px #888888">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-2">
                    <h3 class="panel-title" style="font-size: 18px"><span class="fa fa-suitcase"></span> Purpose</h3>
                </div>
                <div class="col-md-9">
                    <h2><strong><span style="color: #c7170e">(</span> Essential Materials. Better Lives. <span
                                style="color: #c7170e">)</span></strong></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-biru" style="box-shadow: -2px 2px 4px #888888">
        <div class="panel-heading" style="background-color: #c7170e">
            <div class="row">
                <div class="col-md-2">
                    <h3 class="panel-title" style="font-size: 18px;">
                        <span class="fa fa-group"></span> Vision
                    </h3>
                </div>
                <div class="col-md-9">
                    <h3><strong>The materials company of choice for customers and employees</strong></h3>
                    <h4 style="font-size: 16px; color:lightgoldenrodyellow; font-weight: 700">Driving scale, growth and
                        sustainability</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title" style="font-size: 18px;"><span class="fa fa-area-chart"></span> Capabilities</h3>
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
                                <h4 class="tile-title" style="color: darkblue">Investing for <br>the future</h4>
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
                                <h4 class="tile-title" style="color: darkblue">Lasting relationships</h4>
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
                                <h4 class="tile-title" style="color: darkblue">People first</h4>
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
                                <h4 class="tile-title" style="color: darkblue">Best-inclass assets and operations</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-primary" id="nilai-nilai">
        <div class="panel-heading">
            <h3 class="panel-title" style="font-size: 18px;"><span class="fa fa-heartbeat"></span> Values
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
                                <h4 class="tile-title" style="font-weight: 700">Act like owners</h4>
                                <p>passionate, courageous, responsible, and strategic</p>
                            </div>
                        </div>

                        <center><a href="/A_en" class="btn btn-default btn-sm">Open</a></center>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed" style="padding-bottom: 10px">
                        <div class="tile-basic" style="background-color: #e9e8e3">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Value2.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="font-weight: 700">Be adaptable</h4>
                                <p>to opportunities, challenges, and ideas &emsp; &emsp; &emsp; &emsp;</p>
                            </div>
                        </div>
                        <center><a href="/B_en" class="btn btn-default btn-sm">Open</a></center>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed" style="padding-bottom: 10px">
                        <div class="tile-basic" style="background-color: #e9e8e3">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Value3.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="font-weight: 700">Care deeply</h4>
                                <p>for people and our planet with trust, respect, and humility</p>
                            </div>
                        </div>
                        <center> <a href="/C_en" class="btn btn-default btn-sm">Open</a></center>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block block-condensed" style="padding-bottom: 10px">
                        <div class="tile-basic" style="background-color: #e9e8e3">
                            <div class="tile-icon tile-icon-dashed">
                                <img src="gambar/Value4.png">
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title" style="font-weight: 700">Deliver excellence</h4>
                                <p>through knowledge, agility, innovation, and execution</p>
                            </div>
                        </div>

                        <center><a href="/D_en" class="btn btn-default btn-sm">Open</a></center>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-primary" id="skema">
        <div class="panel-heading">
            <h3 class="panel-title" style="font-size: 18px;"><span class="fa fa-file-text-o"></span> Competency Framework
            </h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <center><img src="gambar/Kompas Indorama En.png"></center>
                <center><a href="/kompetensi_en" class="btn btn-default">Global Competency</a>
                    <a href="/profile-en" class="btn btn-default">Your Competency</a>
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
