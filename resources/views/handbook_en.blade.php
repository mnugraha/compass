@extends('master-top')
@section('title')
    Hand Book - The Compass Indorama
@endsection

@section('judul')
    The Compass Indorama Hand Book
@endsection

@section('konten-tanpa-frame')
    <div class="row">
        <div class="block">
            <object data="/file/kompas-indorama_en.pdf" type="application/pdf" width="100%" height="600"></object>
            <p>If the file not appear, please <a href="/file/kompas-indorama_en.pdf"> download</a> The Compass handbook <a
                    href="/file/kompas-indorama_en.pdf">here.</a>
            </p>
        </div>
    </div>
    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
