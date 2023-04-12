@extends('master-top_en')
@section('title')
    Compentency A - Compass Indorama
@endsection

@section('judul')
    <div class="app-heading app-heading-bordered" style="background-color: #57778e;box-shadow: -1px 3px 5px #888888">
        <div class="title">
            <h2 style="font-size: 20px;font-weight: 700;color:aliceblue">
                {{ $kompetensi->id_kompetensi . '. ' . $kompetensi->nm_kompetensi }}</h2>
            <p style="font-size: 13px;color: antiquewhite">{{ $kompetensi->definisi }}</p>
        </div>
    </div>
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed" style="box-shadow: -1px 1px 2px #888888">
        <div class="block-content margin-top-15">
            <div style="overflow-x:auto;">
                <table class="table table-striped table-responsive">
                    <tr style="background-color: #57778e">
                        <th class="text-center" style="color: aliceblue">Structure / Point</th>
                        @for ($i = 1; $i <= 5; $i++)
                            <th class="text-center" style="color: aliceblue; ">{{ $i }}
                                @if ($i == 1)
                                    <br> {{ 'No Evidence' }}
                                @elseif($i == 2)
                                    <br> {{ 'Developing' }}
                                @elseif($i == 3)
                                    <br> {{ 'Proficient' }}
                                @elseif($i == 4)
                                    <br> {{ 'Role Model' }}
                                @elseif($i == 5)
                                    <br> {{ 'Strategic' }}
                                @endif
                            </th>
                        @endfor
                    </tr>
                    <tbody>
                        <tr>
                            <td style="vertical-align:top">
                                <h5 style="font-weight: 700;">
                                    {{ $A11->nm_struktur }}</h5><br>

                            </td>
                            @foreach ($jointabel1 as $x)
                                @if ($x->deskripsi != '-')
                                    <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <h5 style="font-weight: 700;">
                                    {{ $A12->nm_struktur }}</h5><br>

                            </td>
                            @foreach ($jointabel2 as $x)
                                @if ($x->deskripsi != '-')
                                    <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <h5 style="font-weight: 700;">
                                    {{ $A13->nm_struktur }}</h5><br>

                            </td>
                            @foreach ($jointabel3 as $x)
                                @if ($x->deskripsi != '-')
                                    <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                                @endif
                            @endforeach
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
