@extends('master-top')
@section('title')
    Kompetensi A - Kompas Indorama
@endsection

@section('judul')
    Kompetensi
@endsection

@section('konten-tanpa-frame')
    <div class="row">
        @foreach ($kompetensi as $x)
            <div class="col-md-4" style="margin-bottom: 20px">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px; background-color: #57778e">
                        <h3 class="panel-title" style="color: aliceblue"> {{ $x->nm_kompetensi }}</h3>
                        <div class="panel-elements pull-right">
                            <span class="label  label-bordered label-ghost" style="font-size: 18px">
                                {{ $x->id_kompetensi }}</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>{{ $x->definisi }}</p>
                    </div>
                    <div class="panel-footer">
                        <div class="panel-elements pull-right">
                            <a href="{{ $x->id_kompetensi }}" class="btn btn-default pull-right">
                                <span class="icon-launch"></span> Buka</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <a href="/#nilai-nilai" class="btn btn-default btn-icon-fixed" style="box-shadow: -1px 2px 3px #888888"><span
            class="icon-arrow-left"></span>
        Kembali</a>
    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
