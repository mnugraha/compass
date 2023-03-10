@extends('master-top_en')
@section('title')
    Home
@endsection

@section('judul')
    The Compass Indorama
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
                    <h4 style="font-size: 16px; color:lightgoldenrodyellow">Driving scale, growth and sustainability</h4>
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
                    <div class="block">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="fa fa-building-o text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Investing for the future</h4>
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
                                <h4 class="tile-title">Lasting relationships</h4>
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
                                <h4 class="tile-title">People first</h4>
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
                                <h4 class="tile-title">Best-inclass assets and operations</h4>
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
                    <div class="block block-condensed">
                        <div class="tile-basic">
                            <div class="tile-icon tile-icon-dashed">
                                <span class="icon-users text-biru"></span>
                            </div>
                            <div class="tile-content text-center">
                                <h4 class="tile-title">Act like owners</h4>
                                <p>passionate, courageous, responsible, and strategic</p>
                            </div>
                        </div>
                        <div class="block-footer">
                            <span class="label" style="font-size: 28px;color: darkslategrey;margin-top: 10px;">A</span>
                            <a href="/A_en" class="btn btn-info pull-right">Open</a>
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
                                <h4 class="tile-title">Be adaptable</h4>
                                <p>to opportunities, challenges, and ideas</p>
                            </div>
                        </div>
                        <div class="block-footer">
                            <span class="label" style="font-size: 28px;color: darkslategrey;margin-top: 10px;">B</span>
                            <a href="/B_en" class="btn btn-info pull-right">Open</a>
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
                                <h4 class="tile-title">Care deeply</h4>
                                <p>for people and our planet with trust, respect, and humility</p>
                            </div>
                        </div>
                        <div class="block-footer">
                            <span class="label" style="font-size: 28px;color: darkslategrey;margin-top: 10px;">C</span>
                            <a href="/C_en" class="btn btn-info pull-right">Open</a>
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
                                <h4 class="tile-title">Deliver excellence</h4>
                                <p>through knowledge, agility, innovation, and execution</p>
                            </div>
                        </div>
                        <div class="block-footer">
                            <span class="label" style="font-size: 28px;color: darkslategrey;margin-top: 10px;">D</span>
                            <a href="/D_en" class="btn btn-info pull-right">Open</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <h2 style="font-weight: 700">The Compass Indorama handbook</h2>
        <object data="/file/kompas-indorama_en.pdf" type="application/pdf" width="100%" height="400"></object>
        <p>If the file not appear, please <a href="/file/kompas-indorama_en.pdf"> download</a> The Compass handbook <a
                href="/file/kompas-indorama_en.pdf">here.</a>
        </p>
    </div>
@endsection

@section('konten')
@endsection
@section('footer')
    @TRPL-PEI
@endsection
