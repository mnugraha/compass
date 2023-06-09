@extends('/backend/master')
@section('title')
    Kompetensi - Kompas Indorama
@endsection

@section('judul')
    Welcome, <span style="color: cornflowerblue"> {{ auth()->user()->name }}</span>
@endsection

@section('sub-judul')
    Manage Data Kompetensi
@endsection

@section('konten')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="fa fa-bar-chart-o"></span> Insert Data Kompetensi</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="/kompetensiSimpan">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">ID </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="id_kompetensi"
                                value="{{ old('id_kompetensi') }}">
                            <div class="">
                                @error('id_kompetensi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">Kompetensi</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="kompetensi" value="{{ old('kompetensi') }}">
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
                        <label class="col-md-1 control-label">Value</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="value" value="{{ old('value') }}">
                            <div class="">
                                @error('value')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">Definisi</label>
                        <div class="col-md-11">
                            {{-- <input type="text" class="form-control" name="definisi" value="{{ old('definisi') }}"> --}}
                            <textarea class="form-control" name="definisi" cols="60" rows="3"></textarea>
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
                    <th class="text-center" style="font-size: 14px">Kompetensi</th>
                    <th class="text-center" style="font-size: 14px">Value</th>
                    <th class="text-center" style="font-size: 14px">Definisi</th>
                    <th class="text-center" style="font-size: 14px; width: 80px">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($dataKompetensi as $x)
                    <tr>
                        <td class="text-center">{{ $x->id_kompetensi }}</td>
                        <td>{{ $x->nm_kompetensi }}</td>
                        <td>{{ $x->value }}</td>
                        <td>{{ $x->definisi }}</td>
                        <td class="text-center">
                            <a type="button" class="btn btn-info btn-icon" data-toggle="modal"
                                data-target="#edit{{ $x->id_kompetensi }}"><span class="icon-pencil"
                                    style="margin: 3px"></span></a>
                            <a type="button" class="btn btn-danger btn-icon" data-toggle="modal"
                                data-target="#hapus{{ $x->id_kompetensi }}" style="margin: 3px"><span
                                    class="icon-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div>
        <!-- Modal Edit -->
        @foreach ($dataKompetensi as $x)
            <div id="edit{{ $x->id_kompetensi }}" class="modal fade" id="modal-large" tabindex="-1"
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                            class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Edit Data Kompetensi </h5>

                        </div>
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/kompetensiUpdate/{{ $x->id_kompetensi }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">ID </label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="id_kompetensi"
                                                value="{{ $x->id_kompetensi }}">
                                            <div class="">
                                                @error('id_kompetensi')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">Kompetensi</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="kompetensi"
                                                value="{{ $x->nm_kompetensi }}">
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
                                        <label class="col-md-2 control-label">Value</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="value"
                                                value="{{ $x->value }}">
                                            <div class="">
                                                @error('value')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">Definisi</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="definisi" cols="40" rows="5">{{ $x->definisi }}</textarea>
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
        @foreach ($dataKompetensi as $x)
            <div id="hapus{{ $x->id_kompetensi }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true" class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/kompetensiDelete/{{ $x->id_kompetensi }}">
                                {{ csrf_field() }}
                                <br>
                                <h4 class="text-center">Apakah anda yakin akan menghapus data <span
                                        style="color:red">{{ $x->id_kompetensi . '-' . $x->nm_kompetensi }}</span> ?</h4>
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
