@extends('master-top')
@section('title')
    Video - The Compass Indorama
@endsection

@section('judul')
    The Compass Indorama Video V2022
@endsection

@section('konten-tanpa-frame')
    <div class="row">
        <div class="block">

            <div style="text-align: center;" class="container1">
                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/rdeWao5AGGM" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
