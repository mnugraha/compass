@extends('master-top_en')
@section('title')
    Hand Book - The Compass Indorama
@endsection

@section('judul')
    The Compass Indorama Hand Book
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed">
        <object data="/file/kompas-indorama_en.pdf" type="application/pdf" width="100%" height="600"></object>

    </div>

    <code>If the file not appear, please <a href="/file/kompas-indorama_en.pdf"> download</a> The Compass handbook <a
            href="/file/kompas-indorama_en.pdf">here.</a>
    </code>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
