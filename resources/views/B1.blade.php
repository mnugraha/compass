@extends('master-top')
@section('title')
    Kompetensi B - Kompas Indorama
@endsection

@section('judul')
    <div class="app-heading app-heading-bordered" style="background-color: #aa5288;box-shadow: -1px 3px 5px #888888">
        <div class="title">
            <h2 style="font-size: 20px;font-weight: 700;color:bisque">
                {{ $kompetensi->id_kompetensi . '. ' . $kompetensi->nm_kompetensi }}</h2>
            <p style="font-size: 12px;color: aliceblue">{{ $kompetensi->definisi }}</p>
        </div>
    </div>
@endsection

@section('konten-tanpa-frame')
    <div class="block block-condensed" style="box-shadow: -1px 1px 2px #888888">
        <div class="block-content margin-top-15">
            <div style="overflow-x:auto;">
                <table class="table table-striped table-responsive">
                    <tr style="background-color: #aa5288">
                        <th class="text-center" style="color: bisque">Struktur / Poin</th>
                        @for ($i = 1; $i <= 5; $i++)
                            <th class="text-center" style="color: bisque; ">{{ $i }}
                                @if ($i == 1)
                                    <br> {{ 'Tidak Ada Bukti' }}
                                @elseif($i == 2)
                                    <br> {{ 'Dalam Pengembangan' }}
                                @elseif($i == 3)
                                    <br> {{ 'Mahir' }}
                                @elseif($i == 4)
                                    <br> {{ 'Panutan' }}
                                @elseif($i == 5)
                                    <br> {{ 'Strategis' }}
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
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <h5 style="font-weight: 700;">
                                    {{ $A12->nm_struktur }}</h5><br>

                            </td>
                            @foreach ($jointabel2 as $x)
                                <td style="vertical-align:top">{{ $x->deskripsi }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <h5 style="font-weight: 700;">
                                    {{ $A13->nm_struktur }}</h5><br>

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

    <br>
    <br>
@endsection


@section('footer')
    @TRPL-PEI
@endsection
