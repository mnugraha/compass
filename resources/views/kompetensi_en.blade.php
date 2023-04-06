@extends('master-top_en')
@section('title')
    Compentecy - The Compass Indorama
@endsection

@section('judul')
@endsection

@section('konten-tanpa-frame')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title" style="font-size: 18px;"><span class="fa fa-file-text-o"></span>
                Competencies
            </h3>
        </div>
        <div class="panel-body">
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr style="background-color: lightgray; font-size: 14px">
                            <th style="width:20%">Competency</th>
                            <th style="width:70%">Definition</th>
                            <th style="width:10%">Action</th>
                        </tr>
                        <tbody>
                            @foreach ($kompetensiA as $x)
                                <tr>
                                    <td style=" background-color: #57778e; color: white;font-weight: 700">
                                        {{ $x->nm_kompetensi }}
                                    </td>
                                    <td>{{ $x->definisi }}</td>
                                    <td><a href="{{ $x->id_kompetensi . '_en' }}" class="btn btn-default"> Detail</a></td>
                                </tr>
                            @endforeach
                            @foreach ($kompetensiB as $x)
                                <tr>
                                    <td style=" background-color: #aa5288; color: white;font-weight: 700">
                                        {{ $x->nm_kompetensi }}
                                    </td>
                                    <td>{{ $x->definisi }}</td>
                                    <td><a href="{{ $x->id_kompetensi . '_en' }}" class="btn btn-default"> Detail</a></td>
                                </tr>
                            @endforeach
                            @foreach ($kompetensiC as $x)
                                <tr>
                                    <td style=" background-color: #d2b84a; color: white;font-weight: 700">
                                        {{ $x->nm_kompetensi }}
                                    </td>
                                    <td>{{ $x->definisi }}</td>
                                    <td><a href="{{ $x->id_kompetensi . '_en' }}" class="btn btn-default"> Detail</a></td>
                                </tr>
                            @endforeach
                            @foreach ($kompetensiD as $x)
                                <tr>
                                    <td style=" background-color: #618b7c; color: white;font-weight: 700">
                                        {{ $x->nm_kompetensi }}
                                    </td>
                                    <td>{{ $x->definisi }}</td>
                                    <td><a href="{{ $x->id_kompetensi . '_en' }}" class="btn btn-default"> Detail</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a href="/en#skema" class="btn btn-default btn-icon-fixed" style="box-shadow: -1px 2px 3px #888888"><span
            class="icon-arrow-left"></span>
        Back</a>
    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
