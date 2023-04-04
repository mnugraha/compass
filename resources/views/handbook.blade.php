@extends('master-top')
@section('title')
    Buku Saku - Kompas Indorama
@endsection

@section('judul')
    Buku Saku Kompas Indorama
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed">
        <object data="/file/kompas-indorama.pdf" type="application/pdf" width="100%" height="600"></object>
    </div>
    <code>Jika file tidak munncul, silahkan <a href="/file/kompas-indorama_en.pdf"> download</a>Buku Saku Kompas Indorama <a
            href="/file/kompas-indorama_en.pdf">disini.</a>
    </code>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
