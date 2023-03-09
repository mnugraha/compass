@extends('master-top')
@section('title')
    Kompetensi C2 - Kompas Indorama
@endsection

@section('judul')
    <div class="app-heading app-heading-bordered" style="background-color: goldenrod;box-shadow: -1px 3px 5px #888888">
        <div class="title">
            <h2 style="font-size: 20px;font-weight: 700;color:black">
                {{ $kompetensi->id_kompetensi . '. ' . $kompetensi->nm_kompetensi }}</h2>
            <p style="font-size: 13px;color: darkslategrey">{{ $kompetensi->definisi }}</p>
        </div>
    </div>
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed" style="box-shadow: -1px 1px 2px #888888">
        <div class="block-content margin-top-15">
            <div style="overflow-x:auto;">
                <table class="table table-striped table-responsive">
                    <tr style="background-color: goldenrod">
                        <th class="text-center" style="color: darkslategrey">Struktur / Poin</th>
                        @for ($i = 1; $i <= 5; $i++)
                            <th class="text-center" style="color: darkslategrey; ">{{ $i }}</th>
                        @endfor
                    </tr>
                    <tbody>
                        <tr>
                            <td style="vertical-align:top">
                                <h5 style="font-weight: 700;color: goldenrod">
                                    {{ $A11->nm_struktur }}</h5><br>
                                <div style="color: #7F8FA4; font-size: 11px"> {{ $A11->definisi }}</div>
                            </td>
                            @foreach ($jointabel1 as $x)
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <h5 style="font-weight: 700;color: goldenrod">
                                    {{ $A12->nm_struktur }}</h5><br>
                                <div style="color: #7F8FA4; font-size: 11px"> {{ $A12->definisi }}</div>
                            </td>
                            @foreach ($jointabel2 as $x)
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <h5 style="font-weight: 700;color: goldenrod">
                                    {{ $A13->nm_struktur }}</h5><br>
                                <div style="color: #7F8FA4; font-size: 11px"> {{ $A13->definisi }}</div>
                            </td>
                            @foreach ($jointabel3 as $x)
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endforeach
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="/C" class="btn btn-default btn-icon-fixed" style="box-shadow: -1px 2px 3px #888888"><span
            class="icon-arrow-left"></span> Kembali</a>
    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
