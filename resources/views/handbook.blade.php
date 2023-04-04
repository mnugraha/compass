@extends('master-top')
@section('title')
    Buku Saku - Kompas Indorama
@endsection

@section('judul')
    Buku Saku Kompas Indorama
@endsection

@section('konten-tanpa-frame')
    <div class="row">
        <div class="block">

            <object data="/file/kompas-indorama.pdf" type="application/pdf" width="100%" height="600"></object>
            <p>Jika file tidak muncul, silahkan <a href="/file/kompas-indorama.pdf"> download</a> Handbook Kompas Indorama <a
                    href="/file/kompas-indorama.pdf">disini</a>
            </p>
        </div>
    </div>

    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
