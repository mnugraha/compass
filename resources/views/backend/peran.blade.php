@extends('/backend/master')
@section('title')
    Function - Kompas Indorama
@endsection

@section('judul')
    Welcome, <span style="color: cornflowerblue"> {{ auth()->user()->name }}</span>
@endsection

@section('sub-judul')
    Manage Data Function
@endsection

@section('konten')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="fa fa-bar-chart-o"></span> Insert Data Function</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="/peranSimpan">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">ID </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="id_peran" value="{{ old('id_peran') }}">
                            <div class="">
                                @error('id_peran')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">Function</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="peran" value="{{ old('peran') }}">
                            <div class="">
                                @error('peran')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
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
                    <th class="text-center" style="font-size: 14px">Function</th>
                    <th class="text-center" style="font-size: 14px; width: 80px">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($dataPeran as $x)
                    <tr>
                        <td class="text-center">{{ $x->id_peran }}</td>
                        <td>{{ $x->nm_peran }}</td>
                        <td class="text-center">
                            <a type="button" class="btn btn-info btn-icon" data-toggle="modal"
                                data-target="#edit{{ $x->id_peran }}"><span class="icon-pencil"
                                    style="margin: 3px"></span></a>
                            <a type="button" class="btn btn-danger btn-icon" data-toggle="modal"
                                data-target="#hapus{{ $x->id_peran }}" style="margin: 3px"><span
                                    class="icon-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div>
        <!-- Modal Edit -->
        @foreach ($dataPeran as $x)
            <div id="edit{{ $x->id_peran }}" class="modal fade" id="modal-large" tabindex="-1"
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                            class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Edit Data Peran </h5>
                        </div>
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/peranUpdate/{{ $x->id_peran }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">ID </label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="id_peran"
                                                value="{{ $x->id_peran }}">
                                            <div class="">
                                                @error('id_peran')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="col-md-2 control-label">Function</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="peran"
                                                value="{{ $x->nm_peran }}">
                                            <div class="">
                                                @error('peran')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
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
        @foreach ($dataPeran as $x)
            <div id="hapus{{ $x->id_peran }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true" class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/peranDelete/{{ $x->id_peran }}">
                                {{ csrf_field() }}
                                <br>
                                <h4 class="text-center">Apakah anda yakin akan menghapus data <span
                                        style="color:red">{{ $x->id_peran . '-' . $x->nm_peran }}</span> ?</h4>
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
