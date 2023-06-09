@extends('/backend/master')
@section('title')
    User - Kompas Indorama
@endsection

@section('judul')
    Welcome, <span style="color: cornflowerblue"> {{ auth()->user()->name }}</span>
@endsection

@section('sub-judul')
    Manage User
@endsection

@section('konten')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="icon-user"></span> Tambah Data User</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="/userSimpan">
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label">ID User</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="id_user" value="{{ old('id_user') }}">
                            <div class="">
                                @error('id_user')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <label class="col-md-3 control-label">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                            <div class="">
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label">Role <span class="help-block">(Isi jika ingin buat akun
                                admin)</span></label>
                        <div class="col-md-8">
                            <select class="form-control" name="role">
                                <option value=""> - </option>
                                <option value="admin">admin</option>
                                <option value="non admin">non admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-3 control-label">Hp</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="hp" value="{{ old('hp') }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label">Function / Divisi</label>
                        <div class="col-md-8">
                            <select class="form-control" name="function">
                                <option value=""> - </option>
                                @foreach ($dataPeran as $x)
                                    <option value="{{ $x->id_peran }}"
                                        {{ old('function') == $x->id_peran ? 'selected' : '' }}>
                                        {{ $x->nm_peran }}</option>
                                @endforeach
                            </select>
                            <div class="">
                                @error('function')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-3 control-label">Level</label>
                        <div class="col-md-9">
                            <select class="form-control" name="level">
                                <option value=""> - </option>
                                @foreach ($dataLevel as $x)
                                    <option value="{{ $x->id_level }}"
                                        {{ old('level') == $x->id_level ? 'selected' : '' }}>{{ $x->level }}</option>
                                @endforeach
                            </select>
                            <div class="">
                                @error('level')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="password">
                            <div class="">
                                @error('password')
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
                    <th class="text-center" style="font-size: 14px">Employee ID</th>
                    <th class="text-center" style="font-size: 14px">Full Name</th>
                    <th class="text-center" style="font-size: 14px">Role</th>
                    <th class="text-center" style="font-size: 14px">Function</th>
                    <th class="text-center" style="font-size: 14px">Level</th>
                    <th class="text-center" style="font-size: 14px">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($dataUser as $x)
                    <tr>
                        <td class="text-center">{{ $x->id_user }}</td>
                        <td>{{ $x->name }}</td>
                        <td style="font-weight: 800; color: red;font-size: 16px" class="text-center">
                            {{ $x->role }}
                        </td>
                        <td>{{ $x->nm_peran }}</td>
                        <td class="text-center">{{ $x->level }}</td>
                        <td class="text-center">
                            <a type="button" class="btn btn-warning waves-effect" data-toggle="modal"
                                data-target="#password{{ $x->id_user }}">
                                Ubah Password
                            </a>
                            <a type="button" class="btn btn-info btn-icon" data-toggle="modal"
                                data-target="#edit{{ $x->id_user }}"><span class="icon-pencil"></span></a>
                            <a type="button" class="btn btn-danger btn-icon" data-toggle="modal"
                                data-target="#hapus{{ $x->id_user }}"><span class="icon-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div>
        <!-- Modal Edit -->
        @foreach ($dataUser as $x)
            <div id="edit{{ $x->id_user }}" class="modal fade" id="modal-large" tabindex="-1"
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true" class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Edit Data User </h5>

                        </div>
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/userUpdate/{{ $x->id_user }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="col-md-4 control-label">ID User</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="id_user"
                                                value="{{ $x->id_user }}">
                                            <div class="">
                                                @error('id_user')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">Nama Lengkap</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nama"
                                                value="{{ $x->name }}">
                                            <div class="">
                                                @error('nama')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="col-md-4 control-label">Role</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="role">
                                                <option value={{ $x->role }} selected>
                                                    {{ $x->role }}
                                                </option>
                                                <option value="">-</option>
                                                <option value="admin">admin</option>
                                                <option value="non admin">non admin</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">Hp</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="hp"
                                                value="{{ $x->hp }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="col-md-4 control-label">Function / Divisi
                                        </label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="function">
                                                <option value={{ $x->id_peran }} selected>
                                                    {{ $x->nm_peran }}
                                                </option>
                                                @foreach ($dataPeran as $z)
                                                    <option value="{{ $z->id_peran }}">
                                                        {{ $z->nm_peran }}</option>
                                                @endforeach
                                            </select>

                                            <div class="">
                                                @error('function')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-3 control-label">Level </label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="level">
                                                <option value={{ $x->id_level }} selected>{{ $x->level }}
                                                </option>
                                                @foreach ($dataLevel as $x)
                                                    <option value="{{ $x->id_level }}"
                                                        {{ old('level') == $x->id_level ? 'selected' : '' }}>
                                                        {{ $x->level }}</option>
                                                @endforeach
                                            </select>
                                            <div class="">
                                                @error('level')
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
        @foreach ($dataUser as $x)
            <div id="hapus{{ $x->id_user }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true" class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/userDelete/{{ $x->id_user }}">
                                {{ csrf_field() }}
                                <br>
                                <h4 class="text-center">Apakah anda yakin akan menghapus data <span
                                        style="color:red">{{ $x->name }}</span> ?</h4>
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

    <div>
        <!-- Modal password -->
        @foreach ($dataUser as $x)
            <div id="password{{ $x->id_user }}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true" class="icon-cross"></span></button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Ubah Password User</h5>
                        </div>
                        <div class="modal-body">
                            <form class="row gx-3 gy-2 align-items-center" method="POST"
                                action="/userUpdatePass/{{ $x->id_user }}">
                                {{ csrf_field() }}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="input-group auth-pass-inputgroup">
                                            <div class="input-group-text">Password Baru</div>
                                            <input type="text" class="form-control" name="password"
                                                aria-describedby="password-addon" name="password" autocomplete="off">

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
@endsection
