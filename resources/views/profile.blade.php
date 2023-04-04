@extends('master-top')
@section('title')
    Profile
@endsection

@section('judul')
    Profil Anda
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed">
        <div class="block-heading margin-bottom-0">

            <div class="app-heading app-heading-small">
                <div class="contact contact-rounded contact-bordered contact-lg margin-bottom-0">
                    <img src="user.png">
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
                    <span class="text-bolder text-uppercase text-sm">Function:</span>
                    <p><strong>{{ $dataUser->nm_peran }} </strong></p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Department:</span>
                    <p>{{ $dataUser->email }}</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Level:</span>
                    <p>{{ $dataUser->level }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-condensed">
        <div class="app-heading app-heading-small" id="app-tour-heading-inside">
            <div class="title">
                <h3 style="font-size: 18px;color:rgb(0, 0, 0);font-weight: 700">Profil Kompetensi Anda:</h3>
                <p>Berikut ini adalah kompetensi yang harus di kuasai</p>
                <p>Jumlah Kompetensi anda: {{ $jmlKompetensi }}</p>
            </div>
        </div>
        <div class="block-content">
            <div class="app-heading title-only" style="background-color: #57778e;box-shadow: -2px 3px 5px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'A1')
                            <p style="font-weight: 700;color: white">{{ strtoupper($k->value) }}</p>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;

        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive">
                <tr style="background-color: #57778e">
                    <th class="text-center" style="color: aliceblue"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'A1')
                            <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tbody>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'A1')
                                <td style="vertical-align:top">
                                    <p style="font-weight: 700;color: #57778e">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p><br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
                                </td>
                            @endif
                        @endforeach

                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'A1')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: #57778e">
                        <th class="text-center" style="color: aliceblue"></th>
                        @foreach ($struktur as $k)
                            @if ($k->id_kompetensi == 'A2')
                                <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'A2')
                                <td>
                                    <p style="font-weight: 700;color: #57778e">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p>
                                    <br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'A2')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: #57778e">
                        <th class="text-center" style="color: aliceblue"></th>
                        @foreach ($struktur as $k)
                            @if ($k->id_kompetensi == 'A3')
                                <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'A3')
                                <td>
                                    <p style="font-weight: 700;color: #57778e">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p><br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
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
            <div class="app-heading title-only" style="background-color: #aa5288;box-shadow: -2px 3px 5px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'B1')
                            <p style="font-weight: 700;color: aliceblue">{{ strtoupper($k->value) }}</p>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;
        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive">
                <tr style="background-color: #aa5288">
                    <th class="text-center" style="color: aliceblue"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'B1')
                            <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tbody>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'B1')
                                <td style="vertical-align:top">
                                    <p style="font-weight: 700;color: #aa5288">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p><br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'B1')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: #aa5288">
                        <th class="text-center" style="color: aliceblue"></th>
                        @foreach ($struktur as $k)
                            @if ($k->id_kompetensi == 'B2')
                                <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'B2')
                                <td>
                                    <p style="font-weight: 700;color: #aa5288">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p>
                                    <br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'B2')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: #aa5288">
                        <th class="text-center" style="color: aliceblue"></th>
                        @foreach ($struktur as $k)
                            @if ($k->id_kompetensi == 'B3')
                                <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'B3')
                                <td>
                                    <p style="font-weight: 700;color: #aa5288">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p><br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
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
            <div class="app-heading title-only" style="background-color: #d2b84a;box-shadow: -2px 3px 5px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'C1')
                            <p style="font-weight: 700;color: aliceblue">{{ strtoupper($k->value) }}</p>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;

        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive">
                <tr style="background-color: #d2b84a">
                    <th class="text-center" style="color: aliceblue"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'C1')
                            <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                        @endif
                    @endforeach
                </tr>
                <tbody>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'C1')
                                <td style="vertical-align:top">
                                    <p style="font-weight: 700;color: #d2b84a">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p><br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'C1')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: #d2b84a">
                        <th class="text-center" style="color: aliceblue"></th>
                        @foreach ($struktur as $k)
                            @if ($k->id_kompetensi == 'C2')
                                <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'C2')
                                <td>
                                    <p style="font-weight: 700;color: #d2b84a">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p>
                                    <br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'C2')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: #d2b84a">
                        <th class="text-center" style="color: aliceblue"></th>
                        @foreach ($struktur as $k)
                            @if ($k->id_kompetensi == 'C3')
                                <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}</th>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'C3')
                                <td>
                                    <p style="font-weight: 700;color: #d2b84a">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p><br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}</div>
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
                style="background-color: #618b7c;box-shadow: -2px 3px 5px #888888;">
                <div class="title">
                    @foreach ($kompetensi as $k)
                        @if ($k->id_kompetensi == 'D1')
                            <p style="font-weight: 700;color: aliceblue">{{ strtoupper($k->value) }}
                            </p>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        &nbsp;

        <div style="overflow-x:auto;">
            <table class="table table-striped table-responsive">
                <tr style="background-color: #618b7c">
                    <th class="text-center" style="color: aliceblue"></th>
                    @foreach ($struktur as $k)
                        @if ($k->id_kompetensi == 'D1')
                            <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}
                            </th>
                        @endif
                    @endforeach
                </tr>
                <tbody>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'D1')
                                <td style="vertical-align:top">
                                    <p style="font-weight: 700;color: #618b7c">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p><br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}
                                    </div>
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'D1')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: #618b7c">
                        <th class="text-center" style="color: aliceblue"></th>
                        @foreach ($struktur as $k)
                            @if ($k->id_kompetensi == 'D2')
                                <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}
                                </th>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'D2')
                                <td>
                                    <p style="font-weight: 700;color: #618b7c">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p>
                                    <br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}
                                    </div>
                                </td>
                            @endif
                        @endforeach
                        @foreach ($profile as $x)
                            @if ($x->id_kompetensi == 'D2')
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr style="background-color: #618b7c">
                        <th class="text-center" style="color: aliceblue"></th>
                        @foreach ($struktur as $k)
                            @if ($k->id_kompetensi == 'D3')
                                <th class="text-center" style="color: aliceblue">{{ $k->nm_struktur }}
                                </th>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($kompetensi as $k)
                            @if ($k->id_kompetensi == 'D3')
                                <td>
                                    <p style="font-weight: 700;color: #618b7c">
                                        {{ $k->id_kompetensi . ' - ' . $k->nm_kompetensi }}</p><br>
                                    <div style="color: #7F8FA4; font-size: 13px; text-align: justify">
                                        {{ $k->definisi }}
                                    </div>
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

        <a href="/" class="btn btn-default pull-right ">Lihat Semua Kompetensi</a>
    </div>
</div>
</div>
@endsection

@section('konten')
@endsection
@section('footer')
@TRPL-PEI
@endsection
