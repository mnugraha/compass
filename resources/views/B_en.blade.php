@extends('master-top_en')
@section('title')
    Compentency B - Kompas Indorama
@endsection

@section('judul')
    Compentency B - {{ $kompetensi1->value }}
@endsection

@section('konten-tanpa-frame')
    <div class="row">
        @foreach ($kompetensi as $x)
            <div class="col-md-4" style="margin-bottom: 20px">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px; background-color: #aa5288">
                        <h3 class="panel-title" style="color: aliceblue;"> {{ $x->nm_kompetensi }}</h3>
                        <div class="panel-elements pull-right">
                            <span class="label  label-bordered label-ghost" style="font-size: 18px;color:aliceblue">
                                {{ $x->id_kompetensi }}</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p>{{ $x->definisi }}</p>
                    </div>
                    <div class="panel-footer">
                        <div class="panel-elements pull-right">
                            <a href="{{ $x->id_kompetensi . '_en' }}" class="btn btn-default pull-right">
                                <span class="icon-launch"></span> Open</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <a href="/en#nilai-nilai" class="btn btn-default btn-icon-fixed" style="box-shadow: -1px 2px 3px #888888"><span
            class="icon-arrow-left"></span>
        Back</a>
    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
