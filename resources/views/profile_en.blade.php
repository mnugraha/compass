@extends('master-top_en')
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
                <div class="col-md-3 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Function:</span>
                    <p><strong>{{ $dataUser->nm_peran }} </strong></p>
                </div>
                <div class="col-md-3 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Department:</span>
                    <p>{{ $dataUser->email }}</p>
                </div>
                <div class="col-md-3 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Level:</span>
                    <p>{{ $dataUser->level }}</p>
                </div>
                <div class="col-md-3 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Total Compentecies:</span>
                    <p>{{ $jmlKompetensi }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-condensed">
        <div class="app-heading app-heading-small" id="app-tour-heading-inside">
            <div class="title">
                <h3 style="font-size: 18px;color:rgb(0, 0, 0);font-weight: 700">Your Competencies Profile:</h3>
                <p>The following are the competencies that must be know</p>
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
                    <th class="text-center" style="color: aliceblue;background-color: #57778e;width: 150px">Competency
                    </th>
                    <th class="text-center" style="color: aliceblue;background-color: #57778e;width: 250px">Definition
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
                        @if ($x->id_kompetensi == 'A1')
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
                        @if ($x->id_kompetensi == 'A2')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
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
                        @if ($x->id_kompetensi == 'A3')
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
                        Competency
                    </th>
                    <th class="text-center" style="color: aliceblue;background-color: #aa5288;width: 250px">
                        Definition
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
                        @if ($x->id_kompetensi == 'B1')
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
                        @if ($x->id_kompetensi == 'B2')
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
                        @if ($x->id_kompetensi == 'B3')
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
                        @if ($x->id_kompetensi == 'C1')
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
                        @if ($x->id_kompetensi == 'C2')
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
                        @if ($x->id_kompetensi == 'C3')
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
                        @if ($x->id_kompetensi == 'D1')
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
                        @if ($x->id_kompetensi == 'D2')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
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
                        @if ($x->id_kompetensi == 'D3')
                            <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                        @endif
                    @endforeach
                </tr>
            </table>
        </div>

        <a href="/kompetensi_en" class="btn btn-default pull-right ">See More Competency</a>
    </div>
</div>
</div>
@endsection

@section('konten')
@endsection
@section('footer')
@TRPL-PEI
@endsection
