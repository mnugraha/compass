@extends('master-top')
@section('title')
    Competency - Compass Indorama
@endsection

@section('judul')
    Competency
@endsection

@section('konten-tanpa-frame')
    <div class="row">
        @foreach ($kompetensi as $x)
            <div class="col-md-4" style="margin-bottom: 20px">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> {{ $x->nm_kompetensi }}</h3>
                        <div class="panel-elements pull-right">
                            <span class="label label-info label-bordered label-ghost" style="font-size: 18px">
                                {{ $x->id_kompetensi }}</span>

                        </div>
                    </div>
                    <div class="panel-body">
                        <p>{{ $x->definisi }}</p>
                    </div>
                    <div class="panel-footer">
                        <div class="panel-elements pull-right">
                            <a href="{{ $x->id_kompetensi }}" class="btn btn-default pull-right">
                                <span class="icon-launch"></span> Open</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    <a href="/en" class="btn btn-default btn-icon-fixed"><span class="icon-arrow-left"></span> Back</a>
    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
