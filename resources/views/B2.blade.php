@extends('master-top')
@section('title')
    Kompetensi - Kompas Indorama
@endsection

@section('judul')
    <span class="label label-danger label-bordered" style="font-size: 18px; color:black">
        {{ $kompetensi->nm_kompetensi }}</span>
    <p class="subheader" style="font-size: 11px">Mengambil tanggung jawab untuk menciptakan dan mewujudkan hasil yang
        nyata sesuai tujuan sosial Indorama dengan mengedepankan integritas, keselamatan, kode etik, serta lingkungan,
        sosial, dan tata kelola (ESG).</p>
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed">
        <div class="block-content margin-top-15">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                {{ $A11->nm_struktur }}
                            </a>
                        </h4>
                        <div class="panel-elements pull-right">
                            <span class="label label-danger">B2</span>
                        </div>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="list-group">
                                @php
                                    $a = 1;
                                @endphp
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Point</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jointabel1 as $x)
                                            <tr>
                                                <td style="text-align: center">{{ $a++ }}</td>
                                                <td>{{ $x->deskripsi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseOne">
                                {{ $A12->nm_struktur }}
                            </a>
                        </h4>
                        <div class="panel-elements pull-right">
                            <span class="label label-danger">B2</span>
                        </div>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="list-group">
                                @php
                                    $a = 1;
                                @endphp
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Point</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jointabel2 as $x)
                                            <tr>
                                                <td style="text-align: center">{{ $a++ }}</td>
                                                <td>{{ $x->deskripsi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                aria-expanded="true" aria-controls="collapseOne">
                                {{ $A13->nm_struktur }}
                            </a>
                        </h4>
                        <div class="panel-elements pull-right">
                            <span class="label label-danger">B2</span>
                        </div>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="list-group">
                                @php
                                    $a = 1;
                                @endphp
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Point</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jointabel3 as $x)
                                            <tr>
                                                <td style="text-align: center">{{ $a++ }}</td>
                                                <td>{{ $x->deskripsi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="/B" class="btn btn-default btn-icon-fixed"><span class="icon-arrow-left"></span> Kembali</a>
    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
