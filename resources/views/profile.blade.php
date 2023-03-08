@extends('master-top')
@section('title')
    Profile
@endsection

@section('judul')
    Your Profile
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed">
        <div class="block-heading margin-bottom-0">

            <div class="app-heading app-heading-small">
                <div class="contact contact-rounded contact-bordered contact-lg margin-bottom-0">
                    <img src="/theme/assets/images/users/user_6.jpg">
                    <div class="contact-container">
                        <a href="#"><strong> {{ auth()->user()->name }}</strong></a>
                        @php
                            //$peran = auth()->user();
                        @endphp
                        <span>ID: {{ $dataUser->id_user }} </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="block-content row-table-holder">
            <div class="row row-table">
                <div class="col-md-4 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Divisi:</span>
                    <p><strong>{{ $dataUser->nm_peran }} - {{ $dataUser->level }}</strong></p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Email:</span>
                    <p>{{ $dataUser->email }}</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Phone:</span>
                    <p>{{ $dataUser->hp }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-condensed">
        <div class="app-heading app-heading-small" id="app-tour-heading-inside">
            <div class="title">
                <h3 style="font-size: 18px;color:rgb(0, 0, 0);font-weight: 700">Competencies Profile:</h3>
                <p>Berikut ini adalah kompetensi yang harus di kuasai</p>
            </div>
        </div>
        <div class="block-content">
            <div class="app-heading title-only" style="background-color: cornflowerblue;box-shadow: -2px 3px 5px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'A1')
                            <h3 style="font-weight: 700;color: aliceblue">{{ 'A. ' . $k->value }}</h3>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;

        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive">
                <tr style="background-color: cornflowerblue">
                    <th class="text-center" style="color: aliceblue"></th>
                    <th class="text-center" style="color: aliceblue">Integritas</th>
                    <th class="text-center" style="color: aliceblue">Berorientasi Tujuan</th>
                    <th class="text-center" style="color: aliceblue">Keselamatan</th>
                </tr>
                <tbody>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'A1')
                                <td style="vertical-align:top">
                                    <h5 style="font-weight: 700;color: cornflowerblue">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5><br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'A1')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: cornflowerblue">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Keputusan yang meyakinkan</th>
                        <th class="text-center" style="color: aliceblue">Akuntabilitas</th>
                        <th class="text-center" style="color: aliceblue">Komunikasi yang meyakinkan</th>
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'A2')
                                <td>
                                    <h5 style="font-weight: 700;color: cornflowerblue">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5>
                                    <br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'A2')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: cornflowerblue">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Analisi Biaya/Manfaat</th>
                        <th class="text-center" style="color: aliceblue">Mempertimbangkan pendapat orang lain</th>
                        <th class="text-center" style="color: aliceblue">Berorientasi masa depan</th>
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'A3')
                                <td>
                                    <h5 style="font-weight: 700;color: cornflowerblue">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5><br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'A3')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <hr style="border-top: 1px solid black;">
        <div class="block-content">
            <div class="app-heading title-only" style="background-color: blueviolet;box-shadow: -2px 3px 5px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'B1')
                            <h3 style="font-weight: 700;color: aliceblue">{{ 'B. ' . $k->value }}</h3>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;
        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr style="background-color: blueviolet">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Perencanaan detail</th>
                        <th class="text-center" style="color: aliceblue">Penyelesaian masalah</th>
                        <th class="text-center" style="color: aliceblue">Menghasilkan keunggulan secara konsisten
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'B1')
                                <td style="vertical-align:top">
                                    <h5 style="font-weight: 700;color: blueviolet">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5><br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'B1')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: blueviolet">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Wawasan diri</th>
                        <th class="text-center" style="color: aliceblue">Menghargai umpan balik</th>
                        <th class="text-center" style="color: aliceblue">Mengambil peluang untuk maju</th>
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'B2')
                                <td>
                                    <h5 style="font-weight: 700;color: blueviolet">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5>
                                    <br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'B2')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: blueviolet">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Integritas</th>
                        <th class="text-center" style="color: aliceblue">Berorientasi Tujuan</th>
                        <th class="text-center" style="color: aliceblue">Keselamatan</th>
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'B3')
                                <td>
                                    <h5 style="font-weight: 700;color: blueviolet">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5><br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'B3')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <hr style="border-top: 1px solid black;">
        <div class="block-content">
            <div class="app-heading title-only"
                style="background-color: goldenrod;box-shadow: -2px 3px 5px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'C1')
                            <h3 style="font-weight: 700;color: aliceblue">{{ 'C. ' . $k->value }}</h3>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;

        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr style="background-color: goldenrod">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Perencanaan detail</th>
                        <th class="text-center" style="color: aliceblue">Penyelesaian masalah</th>
                        <th class="text-center" style="color: aliceblue">Menghasilkan keunggulan secara
                            konsisten
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'C1')
                                <td style="vertical-align:top">
                                    <h5 style="font-weight: 700;color: goldenrod">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5><br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'C1')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: goldenrod">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Wawasan diri</th>
                        <th class="text-center" style="color: aliceblue">Menghargai umpan balik</th>
                        <th class="text-center" style="color: aliceblue">Mengambil peluang untuk maju</th>
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'C2')
                                <td>
                                    <h5 style="font-weight: 700;color: goldenrod">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5>
                                    <br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'C2')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: goldenrod">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Integritas</th>
                        <th class="text-center" style="color: aliceblue">Berorientasi Tujuan</th>
                        <th class="text-center" style="color: aliceblue">Keselamatan</th>
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'C3')
                                <td>
                                    <h5 style="font-weight: 700;color: goldenrod">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5><br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'C3')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <hr style="border-top: 1px solid black;">
        <div class="block-content">
            <div class="app-heading title-only"
                style="background-color: cadetblue;box-shadow: -2px 3px 5px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'D1')
                            <h3 style="font-weight: 700;color: aliceblue">{{ 'D. ' . $k->value }}</h3>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;

        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr style="background-color: cadetblue">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Perencanaan detail</th>
                        <th class="text-center" style="color: aliceblue">Penyelesaian masalah</th>
                        <th class="text-center" style="color: aliceblue">Menghasilkan keunggulan secara
                            konsisten
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'D1')
                                <td style="vertical-align:top">
                                    <h5 style="font-weight: 700;color: cadetblue">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5><br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'D1')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: cadetblue">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Wawasan diri</th>
                        <th class="text-center" style="color: aliceblue">Menghargai umpan balik</th>
                        <th class="text-center" style="color: aliceblue">Mengambil peluang untuk maju</th>
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'D2')
                                <td>
                                    <h5 style="font-weight: 700;color: cadetblue">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5>
                                    <br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'D2')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: cadetblue">
                        <th class="text-center" style="color: aliceblue"></th>
                        <th class="text-center" style="color: aliceblue">Integritas</th>
                        <th class="text-center" style="color: aliceblue">Berorientasi Tujuan</th>
                        <th class="text-center" style="color: aliceblue">Keselamatan</th>
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'D3')
                                <td>
                                    <h5 style="font-weight: 700;color: cadetblue">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</h5><br>
                                    {{ $k->definisi }}
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'D3')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>

        <a href="/dashboard" class="btn btn-default pull-right ">See More Competency</a>
    </div>
</div>
</div>
@endsection

@section('konten')
@endsection
@section('footer')
@TRPL-PEI
@endsection
