@extends('master-top')
@section('title')
    Profile
@endsection

@section('judul')
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed">
        <div class="block-heading margin-bottom-0">

            <div class="app-heading app-heading-small">
                <div class="contact contact-rounded contact-bordered contact-lg margin-bottom-0">
                    <img src="user.png">
                    <div class="contact-container">
                        <a href="#"><strong> {{ auth()->user()->name }}</strong></a>
                        <span>ID: {{ $dataUser->id_user }} </span>
                        <a class="btn btn-default btn-xs" style="color: tomato; font-size: 10px" data-toggle="modal"
                            data-target="#password{{ $dataUser->id_user }}">
                            Ubah Password
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="block-content row-table-holder">
            <div class="row row-table">
                <div class="col-md-4 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Function:</span>
                    <p><strong>{{ $dataUser->nm_peran }} </strong></p>
                </div>

                <div class="col-md-4 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Level:</span>
                    <p>{{ $dataUser->level }}</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Jumlah Kompetensi:</span>
                    <p>{{ $jmlKompetensi }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="block " style="background-color: whitesmoke;">
        <div class="block-content">
            <h3 style="font-weight: 700">Tingkat kemahiran minimal yang diharapkan sesuai jabatan dan level manajemen
            </h3>

            -
            <div style="overflow-x:auto;">
                <table class="table  table-responsive table-bordered">
                    <tr style="text-align: center">
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'A1' || $k->id_kompetensi == 'A2' || $k->id_kompetensi == 'A3')
                                <td style="width: 8.3%; background-color: #57778e">
                                    <p style="font-size: 10px;line-height: normal;color: aliceblue">{{ $k->nm_kompetensi }}
                                    </p>
                                </td>
                            @endif
                            @if ($k->id_kompetensi == 'B1' || $k->id_kompetensi == 'B2' || $k->id_kompetensi == 'B3')
                                <td style="width: 8.3%; background-color: #aa5288">
                                    <p style="font-size: 10px;line-height: normal;color: aliceblue">{{ $k->nm_kompetensi }}
                                    </p>
                                </td>
                            @endif
                            @if ($k->id_kompetensi == 'C1' || $k->id_kompetensi == 'C2' || $k->id_kompetensi == 'C3')
                                <td style="width: 8.3%; background-color: #d2b84a">
                                    <p style="font-size: 10px;line-height: normal;color: aliceblue">{{ $k->nm_kompetensi }}
                                    </p>
                                </td>
                            @endif
                            @if ($k->id_kompetensi == 'D1' || $k->id_kompetensi == 'D2' || $k->id_kompetensi == 'D3')
                                <td style="width: 8.3%; background-color: #618b7c">
                                    <p style="font-size: 10px;line-height: normal;color: aliceblue">{{ $k->nm_kompetensi }}
                                    </p>
                                </td>
                            @endif
                        @endforeach
                    </tr>
                    {{-- Pemeringkatan --}}
                    <tr>
                        @foreach ($dataPeringkat as $x)
                            @if ($dataUser->id_peran == $x->id_peran && $dataUser->id_level == $x->id_level)
                                @if ($x->score == '-')
                                    @php
                                        $warna = '#cac9c7';
                                    @endphp
                                @endif
                                @if ($x->score == 2)
                                    @php
                                        $warna = '#f69490';
                                    @endphp
                                @endif
                                @if ($x->score == 3)
                                    @php
                                        $warna = '#feefab';
                                    @endphp
                                @endif
                                @if ($x->score == 4)
                                    @php
                                        $warna = '#c8dea5';
                                    @endphp
                                @endif
                                @if ($x->score == 5)
                                    @php
                                        $warna = '#82caa0';
                                    @endphp
                                @endif
                                <td style="text-align: center; background-color:<?php echo $warna; ?>">{{ $x->score }}
                                </td>
                            @endif
                        @endforeach
                    </tr>
                </table>
            </div>
            <div style="overflow-x:auto;">
                <table class="table  table-responsive table-bordered">
                    <tr>
                        <td
                            style="width: 30px;background-color: #404144;color: aliceblue;font-weight: 700;text-align: center">
                            1</td>
                        <td style="width: 15%">Tidak ditampilkan</td>
                        <td style="width: 30px;background-color: #f69490;font-weight: 700;text-align: center">
                            2
                        </td>
                        <td style="width: 15%">Dalam Pengembangan</td>
                        <td style="width: 30px;background-color: #feefab;font-weight: 700;text-align: center">
                            3
                        </td>
                        <td style="width: 15%">Mahir</td>
                        <td style="width: 30px;background-color: #c8dea5;font-weight: 700;text-align: center">
                            4
                        </td>
                        <td style="width: 15%">Panutan</td>
                        <td style="width: 30px;background-color: #82caa0;font-weight: 700;text-align: center">
                            5
                        </td>
                        <td style="width: 15%">Strategis</td>
                    </tr>
                </table>
            </div>
            <p style="text-align: left;font-size: 14px">Terdapat 5 level umum untuk masing-masing kompetensi. Level yang
                dicapai oleh seseorang tergantung pada <b>kualitas</b> dan <b>frekuensi</b> kompetensi ditampilkan. Setiap
                level memiliki
                kriteria khusus dalam setiap kompetensi, tetapi 5 level yang dimaksud secara umum didefinisikan seperti di
                bawah ini.</p>
            -
            <div style="overflow-x:auto;">
                <table class="table  table-responsive table-bordered">
                    <tr>
                        <td
                            style="width: 30px;background-color: #404144;color: aliceblue;font-weight: 700;text-align: center">
                            1</td>
                        <td style="width: 15%">Tidak ditampilkan</td>
                        <td>Sedikitnya bukti yang mempresentasikan kompetensi; atau tidak berlaku untuk peran tersebut.</td>
                    </tr>
                    <tr>
                        <td style="width: 30px;background-color: #f69490;font-weight: 700;text-align: center">
                            2</td>
                        <td style="width: 15%">Dalam Pengembangan</td>
                        <td>Memperlihatkan kompetensi level dasar. Mungkin membutuhkan dukungan dari orang lain, khususnya
                            pada skenario yang tidak dikenal dengan baik atau yang menantang.</td>
                    </tr>
                    <tr>
                        <td style="width: 30px;background-color: #feefab;font-weight: 700;text-align: center">
                            3</td>
                        <td style="width: 15%">Mahir</td>
                        <td>Secara konsisten menampilkan kompetensi level ahli di berbagai situasi.</td>
                    </tr>
                    <tr>
                        <td style="width: 30px;background-color: #c8dea5;font-weight: 700;text-align: center">
                            4</td>
                        <td style="width: 15%">Panutan</td>
                        <td>Secara proaktif memperlihatkan penggunaan kompetensi yang dominan dan konsisten, memengaruhi
                            orang-orang di sekitarnya dengan cara positif.</td>
                    </tr>
                    <tr>
                        <td style="width: 30px;background-color: #82caa0;font-weight: 700;text-align: center">
                            5</td>
                        <td style="width: 15%">Strategis</td>
                        <td>Mencontohkan penggunaan kompetensi, menggalakkan penerapannya secara efektif di lingkungan
                            divisinya, tidak hanya dalam tim langsungnya.</td>
                    </tr>

                </table>
            </div>
            <p style="text-align: left;font-size: 14px">Setiap tingkat kepemimpinan fungsional akan diwajibkan memiliki
                ‘Tingkat Penguasaan’ tertentu atas kompetensi dalam skema ini. Tingkat Penguasaan tersebut akan memberikan
                pemahaman yang jelas kepada individu tentang tingkat kompetensi yang diharapkan dapat mereka capai.</p>
        </div>

    </div>
    <div class="block block-condensed">
        <div class="app-heading app-heading-small" id="app-tour-heading-inside">
            <div class="title">
                <h3 style="font-size: 18px;color:rgb(0, 0, 0);font-weight: 700">Profil Kompetensi Anda</h3>
                <p>Berikut ini adalah kompetensi yang harus diketahui: </p>
            </div>

        </div>
        <div class="block-content">
            <div class="app-heading title-only" style="box-shadow: -1px 2px 3px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'A1')
                            <p style="font-weight: 700;color: #57778e;font-size: 18px">{{ strtoupper($k->value) }}</p>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;

        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive center" style="box-shadow: 2px 2px 7px #999;width: 99%">
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #57778e;width: 150px">Kompetensi
                    </th>
                    <th class="text-center" style="color: aliceblue;background-color: #57778e;width: 250px">Definisi
                    </th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'A1')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>

                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'A1')
                            <td style="vertical-align:top;background-color: #57778e; color: aliceblue">
                                <p style="font-weight: 700">
                                    {{ $k->nm_kompetensi }}</p><br>

                            </td>
                            <td style="vertical-align:top;background-color: #57778e; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'A1' && $x->id_struktur == 'A11')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'A1' && $x->id_struktur == 'A12')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'A1' && $x->id_struktur == 'A13')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #57778e"></th>
                    <th class="text-center" style="color: aliceblue;background-color: #57778e"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'A2')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'A2')
                            <td style="vertical-align:top;background-color: #57778e; color: aliceblue">
                                <p style="font-weight: 700;">
                                    {{ $k->nm_kompetensi }}</p>
                                <br>
                            </td>
                            <td style="vertical-align:top;background-color: #57778e; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'A2' && $x->id_struktur == 'A21')
                            @if ($x->deskripsi == '-')
                                @php
                                    $warna = '#cac9c7';
                                @endphp
                            @endif
                            @if ($x->deskripsi != '-')
                                @php
                                    $warna = '';
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                        @if ($x->id_kompetensi == 'A2' && $x->id_struktur == 'A22')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                        @if ($x->id_kompetensi == 'A2' && $x->id_struktur == 'A23')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #57778e"></th>
                    <th class="text-center" style="color: aliceblue;background-color: #57778e"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'A3')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'A3')
                            <td style="vertical-align:top;background-color: #57778e; color: aliceblue">
                                <p style="font-weight: 700;">
                                    {{ $k->nm_kompetensi }}</p>
                                <br>
                            </td>
                            <td style="vertical-align:top;background-color: #57778e; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'A3' && $x->id_struktur == 'A31')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                        @if ($x->id_kompetensi == 'A3' && $x->id_struktur == 'A32')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                        @if ($x->id_kompetensi == 'A3' && $x->id_struktur == 'A33')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                    @endforeach
                </tr>
            </table>
        </div>
        <hr style="border-top: 1px dashed black;">
        <div class="block-content">
            <div class="app-heading title-only" style="box-shadow: -1px 2px 3px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'B1')
                            <p style="font-weight: 700;color: #aa5288;font-size: 18px">{{ strtoupper($k->value) }}</p>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;
        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive" style="box-shadow: 2px 2px 7px #999;width: 99%">
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #aa5288;width: 150px">
                        Kompetensi
                    </th>
                    <th class="text-center" style="color: aliceblue;background-color: #aa5288;width: 250px">
                        Definisi
                    </th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'B1')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>

                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'B1')
                            <td style="vertical-align:top;background-color: #aa5288; color: aliceblue">
                                <p style="font-weight: 700">
                                    {{ $k->nm_kompetensi }}</p><br>

                            </td>
                            <td style="vertical-align:top;background-color: #aa5288; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'B1' && $x->id_struktur == 'B11')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'B1' && $x->id_struktur == 'B12')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'B1' && $x->id_struktur == 'B13')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #aa5288"></th>
                    <th class="text-center" style="color: aliceblue;background-color: #aa5288"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'B2')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'B2')
                            <td style="vertical-align:top;background-color: #aa5288; color: aliceblue">
                                <p style="font-weight: 700;">
                                    {{ $k->nm_kompetensi }}</p>
                                <br>
                            </td>
                            <td style="vertical-align:top;background-color: #aa5288; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'B2' && $x->id_struktur == 'B21')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'B2' && $x->id_struktur == 'B22')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'B2' && $x->id_struktur == 'B23')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #aa5288"></th>
                    <th class="text-center" style="color: aliceblue;background-color: #aa5288"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'B3')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'B3')
                            <td style="vertical-align:top;background-color: #aa5288; color: aliceblue">
                                <p style="font-weight: 700;">
                                    {{ $k->nm_kompetensi }}</p>
                                <br>
                            </td>
                            <td style="vertical-align:top;background-color: #aa5288; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'B3' && $x->id_struktur == 'B31')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'B3' && $x->id_struktur == 'B32')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'B3' && $x->id_struktur == 'B33')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>

            </table>
        </div>
        <hr style="border-top: 1px dashed black;">
        <div class="block-content">
            <div class="app-heading title-only" style="box-shadow: -1px 2px 3px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'C1')
                            <p style="font-weight: 700;color: #d2b84a;font-size: 18px">{{ strtoupper($k->value) }}
                            </p>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;
        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive"
                style="box-shadow: 2px 2px 7px #999;width: 99%">
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #d2b84a;width: 150px">
                        Kompetensi
                    </th>
                    <th class="text-center" style="color: aliceblue;background-color: #d2b84a;width: 250px">
                        Definisi
                    </th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'C1')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>

                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'C1')
                            <td style="vertical-align:top;background-color: #d2b84a; color: aliceblue">
                                <p style="font-weight: 700">
                                    {{ $k->nm_kompetensi }}</p><br>

                            </td>
                            <td style="vertical-align:top;background-color: #d2b84a; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'C1' && $x->id_struktur == 'C11')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'C1' && $x->id_struktur == 'C12')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'C1' && $x->id_struktur == 'C13')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #d2b84a"></th>
                    <th class="text-center" style="color: aliceblue;background-color: #d2b84a"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'C2')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'C2')
                            <td style="vertical-align:top;background-color: #d2b84a; color: aliceblue">
                                <p style="font-weight: 700;">
                                    {{ $k->nm_kompetensi }}</p>
                                <br>
                            </td>
                            <td style="vertical-align:top;background-color: #d2b84a; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'C2' && $x->id_struktur == 'C21')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'C2' && $x->id_struktur == 'C22')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'C2' && $x->id_struktur == 'C23')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #d2b84a"></th>
                    <th class="text-center" style="color: aliceblue;background-color: #d2b84a"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'C3')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'C3')
                            <td style="vertical-align:top;background-color: #d2b84a; color: aliceblue">
                                <p style="font-weight: 700;">
                                    {{ $k->nm_kompetensi }}</p>
                                <br>
                            </td>
                            <td style="vertical-align:top;background-color: #d2b84a; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'C3' && $x->id_struktur == 'C31')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                        @if ($x->id_kompetensi == 'C3' && $x->id_struktur == 'C32')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                        @if ($x->id_kompetensi == 'C3' && $x->id_struktur == 'C33')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                    @endforeach
                </tr>
            </table>
        </div>
        <hr style="border-top: 1px dashed black;">
        <div class="block-content">
            <div class="app-heading title-only" style="box-shadow: -1px 2px 3px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'D1')
                            <p style="font-weight: 700;color: #618b7c;font-size: 18px">
                                {{ strtoupper($k->value) }}
                            </p>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;

        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive"
                style="box-shadow: 2px 2px 7px #999;width: 99%">
                <tr>
                    <th class="text-center"
                        style="color: aliceblue;background-color: #618b7c;width: 150px">
                        Kompetensi
                    </th>
                    <th class="text-center"
                        style="color: aliceblue;background-color: #618b7c;width: 250px">
                        Definisi
                    </th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'D1')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>

                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'D1')
                            <td style="vertical-align:top;background-color: #618b7c; color: aliceblue">
                                <p style="font-weight: 700">
                                    {{ $k->nm_kompetensi }}</p><br>

                            </td>
                            <td style="vertical-align:top;background-color: #618b7c; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'D1' && $x->id_struktur == 'D11')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'D1' && $x->id_struktur == 'D12')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'D1' && $x->id_struktur == 'D13')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #618b7c"></th>
                    <th class="text-center" style="color: aliceblue;background-color: #618b7c"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'D2')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'D2')
                            <td style="vertical-align:top;background-color: #618b7c; color: aliceblue">
                                <p style="font-weight: 700;">
                                    {{ $k->nm_kompetensi }}</p>
                                <br>
                            </td>
                            <td style="vertical-align:top;background-color: #618b7c; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'D2' && $x->id_struktur == 'D21')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                        @if ($x->id_kompetensi == 'D2' && $x->id_struktur == 'D22')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                        @if ($x->id_kompetensi == 'D2' && $x->id_struktur == 'D23')
                            @if ($x->deskripsi == '-')
                                @php
                                    if ($x->deskripsi == '-') {
                                        $warna = '#cac9c7';
                                    } else {
                                        $warna = '';
                                    }
                                @endphp
                            @endif
                            <td style="vertical-align:top;background-color: {{ $warna }}">
                                {{ $x->deskripsi }}
                            </td>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    <th class="text-center" style="color: aliceblue;background-color: #618b7c"></th>
                    <th class="text-center" style="color: aliceblue;background-color: #618b7c"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'D3')
                            <th class="text-center" style="font-weight: 700">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tr>
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'D3')
                            <td style="vertical-align:top;background-color: #618b7c; color: aliceblue">
                                <p style="font-weight: 700;">
                                    {{ $k->nm_kompetensi }}</p>
                                <br>
                            </td>
                            <td style="vertical-align:top;background-color: #618b7c; color: aliceblue">
                                {{ $k->definisi }} </td>
                        @endif
                    @endforeach
                    @foreach ($profile as $x)
                        @if ($x->id_kompetensi == 'D3' && $x->id_struktur == 'D31')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'D3' && $x->id_struktur == 'D32')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                        @if ($x->id_kompetensi == 'D3' && $x->id_struktur == 'D33')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>
            </table>
        </div>

        <a href="/kompetensi" class="btn btn-default pull-right ">Lihat Semua Kompetensi</a>
    </div>
</div>
</div>
<div>
<!-- Modal password -->
@foreach ($dataUser1 as $x)
    <div id="password{{ $x->id_user }}" class="modal fade" tabindex="-1"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true" class="icon-cross"></span></button>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Ubah Password</h5>
                </div>
                <div class="modal-body">
                    <form class="row gx-3 gy-2 align-items-center" method="POST"
                        action="/userUpdatePass1/{{ $x->id_user }}">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="input-group auth-pass-inputgroup">
                                    <div class="input-group-text">Masukan Password Baru</div>
                                    <input type="text" class="form-control" name="password"
                                        aria-describedby="password-addon" name="password"
                                        autocomplete="off">

                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect"
                        data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-info waves-effect waves-light" value="Update">
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endforeach
</div> <!-- end preview-->
@endsection

@section('konten')
@endsection
@section('footer')
@TRPL-PEI
@endsection
