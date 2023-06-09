@extends('/backend/master')
@section('title')
    Value - Kompas Indorama
@endsection

@section('judul')
    Welcome, <span style="color: cornflowerblue"> {{ auth()->user()->name }}</span>
@endsection

@section('sub-judul')
    Manage Data Value
@endsection

@section('konten')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="fa fa-bar-chart-o"></span> Insert Data Value</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="/valueSimpan">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">ID </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="id_value" value="{{ old('id_value') }}">
                            <div class="">
                                @error('id_value')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">Struktur</label>
                        <div class="col-md-6">
                            <select class="form-control" name="struktur">
                                <option value=""> - </option>
                                @foreach ($dataStruktur as $x)
                                    <option value="{{ $x->id_struktur }}"
                                        {{ old('struktur') == $x->id_struktur ? 'selected' : '' }}>
                                        {{ $x->id_struktur . ' - ' . $x->nm_struktur }}</option>
                                @endforeach
                            </select>
                            <div class="">
                                @error('struktur')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">Kompetensi</label>
                        <div class="col-md-6">
                            <select class="form-control" name="kompetensi">
                                <option value=""> - </option>
                                @foreach ($dataKompetensi as $x)
                                    <option value="{{ $x->id_kompetensi }}"
                                        {{ old('kompetensi') == $x->id_kompetensi ? 'selected' : '' }}>
                                        {{ $x->id_kompetensi . ' - ' . $x->nm_kompetensi }}</option>
                                @endforeach
                            </select>
                            <div class="">
                                @error('kompetensi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">Deskripsi</label>
                        <div class="col-md-6">
                            {{-- <input type="text" class="form-control" name="definisi" value="{{ old('definisi') }}"> --}}
                            <textarea class="form-control" name="deskripsi" cols="60" rows="3"></textarea>
                        </div>
                    </div>
                </div>
        </div>
        <div class="panel-footer">
            <div class="panel-elements pull-right">
                <input type="submit" value="Simpan" class="btn btn-success pull-right">
            </div>
        </div>
        </form>
    </div>
    <div class="block-content">

        <table class="table table-striped table-bordered datatable-extended">
            <thead>
                <tr>
                    <th class="text-center" style="font-size: 14px">ID </th>
                    <th class="text-center" style="font-size: 14px; width: 10%">Struktur</th>
                    <th class="text-center" style="font-size: 14px; width: 20%">Kompetensi</th>
                    <th class="text-center" style="font-size: 14px">Deskripsi</th>
                    <th class="text-center" style="font-size: 14px; width: 80px">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($dataValue as $x)
                    <tr>
                        <td class="text-center">{{ $x->id_nilai }}</td>
                        <td>{{ $x->id_struktur . '-' . $x->nm_struktur }}</td>
                        <td>{{ $x->id_kompetensi . '-' . $x->nm_kompetensi }}</td>
                        <td>{{ $x->deskripsi }}</td>
                        <td class="text-center">
                            <a type="button" class="btn btn-info btn-icon" data-toggle="modal"
                                data-target="#edit{{ $x->id_nilai }}"><span class="icon-pencil"
                                    style="margin: 3px"></span></a>
                            <a type="button" class="btn btn-danger btn-icon" data-toggle="modal"
                                data-target="#hapus{{ $x->id_nilai }}" style="margin: 3px"><span
                                    class="icon-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div>
        <!-- Modal Edit -->
        @foreach ($dataValue as $x)
            <div id="edit{{ $x->id_nilai }}" class="modal fade" id="modal-large" tabindex="-1"
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                            class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Edit Data Value </h5>
                        </div>
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/valueUpdate/{{ $x->id_nilai }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">ID </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="id_value"
                                                value="{{ $x->id_nilai }}">
                                            <div class="">
                                                @error('id_value')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">Struktur</label>
                                        <div class="col-md-10">

                                            <select class="form-control" name="struktur">
                                                <option value="{{ $x->id_struktur }}" selected>
                                                    {{ $x->id_struktur . '-' . $x->nm_struktur }}
                                                </option>
                                                @foreach ($dataStruktur as $y)
                                                    <option value="{{ $y->id_struktur }}">
                                                        {{ $y->id_struktur . ' - ' . $y->nm_struktur }}</option>
                                                @endforeach
                                            </select>
                                            <div class="">
                                                @error('struktur')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">Kompetensi</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="kompetensi">
                                                <option value="{{ $x->id_kompetensi }}" selected>
                                                    {{ $x->id_kompetensi . ' - ' . $x->nm_kompetensi }}
                                                </option>
                                                @foreach ($dataKompetensi as $z)
                                                    <option value="{{ $z->id_kompetensi }}">
                                                        {{ $z->id_kompetensi . ' - ' . $z->nm_kompetensi }}</option>
                                                @endforeach
                                            </select>
                                            <div class="">
                                                @error('kompetensi')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">Deskripsi</label>
                                        <div class="col-md-10">
                                            {{-- <input type="text" class="form-control" name="definisi" value="{{ old('definisi') }}"> --}}
                                            <textarea class="form-control" name="deskripsi" cols="60" rows="3">{{ $x->deskripsi }}</textarea>
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
    <div>
        <!-- Modal Delete -->
        @foreach ($dataValue as $x)
            <div id="hapus{{ $x->id_nilai }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true" class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/valueDelete/{{ $x->id_nilai }}">
                                {{ csrf_field() }}
                                <br>
                                <h4 class="text-center">Apakah anda yakin akan menghapus data <span
                                        style="color:red">{{ $x->id_nilai . ' - ' . $x->deskripsi }}</span> ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect text-center"
                                data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-danger waves-effect waves-light" value="Hapus">
                        </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        @endforeach
    </div> <!-- end preview-->
@endsection
