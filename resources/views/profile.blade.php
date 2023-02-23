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
            <div class="app-timeline">
                <div class="app-timeline-item">
                    <div class="user"><img src="asset/a.png" alt="A"></div>
                    <div class="content">
                        <div class="title">
                            <span class="label label-warning label-bordered"
                                style="font-size: 14px;font-weight: 700">Bertindak
                                Sebagai Pemilik</span>
                        </div>
                        <div class="comments">
                            <div class="total">
                                <ol>
                                    @foreach ($profile as $x)
                                        @if ($x->id_kompetensi == 'A1' || $x->id_kompetensi == 'A2' || $x->id_kompetensi == 'A3')
                                            <li>
                                                <span style="font-size: 15px"> {{ $x->deskripsi }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-timeline-item">
                    <div class="user"><img src="asset/b.png" alt="A"></div>
                    <div class="content">
                        <span class="label label-warning label-bordered"
                            style="font-size: 14px;font-weight: 700">Beradaptasi</span>
                        <div class="comments">
                            <div class="total">
                                <ol>
                                    @foreach ($profile as $x)
                                        @if ($x->id_kompetensi == 'B1' || $x->id_kompetensi == 'B2' || $x->id_kompetensi == 'B3')
                                            <li>
                                                <span style="font-size: 15px"> {{ $x->deskripsi }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="app-timeline-item">
                    <div class="user"><img src="asset/c.png" alt="A"></div>
                    <div class="content">
                        <span class="label label-warning label-bordered" style="font-size: 14px;font-weight: 700">Menunjukan
                            kepedulian mendalam</span>
                        <div class="comments">
                            <div class="total">
                                <ol>
                                    @foreach ($profile as $x)
                                        @if ($x->id_kompetensi == 'C1' || $x->id_kompetensi == 'C2' || $x->id_kompetensi == 'C3')
                                            <li>
                                                <span style="font-size: 15px"> {{ $x->deskripsi }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="app-timeline-item">
                    <div class="user"><img src="asset/d.png" alt="A"></div>
                    <div class="content">
                        <span class="label label-warning label-bordered"
                            style="font-size: 14px;font-weight: 700">Menghasilkan Keunggulan</span>
                        <div class="comments">
                            <div class="total">
                                <ol>
                                    @foreach ($profile as $x)
                                        @if ($x->id_kompetensi == 'D1' || $x->id_kompetensi == 'D2' || $x->id_kompetensi == 'D3')
                                            <li>
                                                <span style="font-size: 15px"> {{ $x->deskripsi }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <a href="/dashboard" class="btn btn-info pull-right ">See More Competency</a>
        </div>
    </div>
    </div>
@endsection

@section('konten')
@endsection
@section('footer')
    @TRPL-PEI
@endsection
