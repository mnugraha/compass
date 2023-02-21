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

            <div class="row row-table">
                <div class="col-md-12 col-xs-12">
                    <span class="text-bolder text-uppercase text-sm">Competency Profile:</span>
                    <p>

                        @if ($dataUser->nm_peran == 'Manufaktur')
                            @if ($dataUser->id_level == 1)
                                <h3 class="label label-info label-bordered">Bertindak Sebagai Pemilik</h3>
                                @foreach ($profile as $x)
                                    @if ($x->id_kompetensi == 'A1' || $x->id_kompetensi == 'A2' || $x->id_kompetensi == 'A3')
                                        <ul>
                                            <li style="list-style-type: '\2014 &nbsp;'">
                                                {{ $x->deskripsi }}
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach

                                <h3 class="label label-danger label-bordered">Beradaptasi</h3>
                                @foreach ($profile as $x)
                                    @if ($x->id_kompetensi == 'B1' || $x->id_kompetensi == 'B2' || $x->id_kompetensi == 'B3')
                                        <ul>
                                            <li style="list-style-type: '\2014 &nbsp;'">{{ $x->deskripsi }}</li>
                                        </ul>
                                    @endif
                                @endforeach

                                <h3 class="label label-warning label-bordered">Menunjukan kepedulian mendalam</h3>
                                @foreach ($profile as $x)
                                    @if ($x->id_kompetensi == 'C1' || $x->id_kompetensi == 'C2' || $x->id_kompetensi == 'C3')
                                        <ul>
                                            <li style="list-style-type: '\2014 &nbsp;'">{{ $x->deskripsi }}</li>
                                        </ul>
                                    @endif
                                @endforeach

                                <h3 class="label label-success label-bordered">Menghasilkan Keunggulan</h3>
                                @foreach ($profile as $x)
                                    @if ($x->id_kompetensi == 'D1' || $x->id_kompetensi == 'D2' || $x->id_kompetensi == 'D3')
                                        <ul>
                                            <li style="list-style-type: '\2014 &nbsp;'">{{ $x->deskripsi }}</li>
                                        </ul>
                                    @endif
                                @endforeach
                            @endif

                            @if ($dataUser->id_level == 2)
                            @endif
                            @if ($dataUser->id_level == 3)
                            @endif
                            @if ($dataUser->id_level == 4)
                            @endif
                        @endif
                    </p>
                </div>

            </div>

            <div class="row row-table">
                <div class="col-xs-12">
                    <a href="/dashboard" class="btn btn-info pull-right ">See More Competency</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('konten')
@endsection
@section('footer')
    @TRPL-PEI
@endsection
