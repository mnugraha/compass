@extends('/backend/master')
@section('title')
    User - Kompas Indorama
@endsection

@section('judul')
    User
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
                            <input type="text" class="form-control" name="id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-3 control-label">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label">E-Mail</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-3 control-label">Hp</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="hp">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label">Function / Divisi</label>
                        <div class="col-md-8">
                            <select class="form-control" name="function">
                                <option> - </option>
                                @foreach ($dataPeran as $x)
                                    <option value="{{ $x->id_peran }}">{{ $x->nm_peran }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-3 control-label">Level</label>
                        <div class="col-md-9">
                            <select class="form-control" name="level">
                                <option> - </option>
                                @foreach ($dataLevel as $x)
                                    <option value="{{ $x->id_level }}">{{ $x->level }}</option>
                                @endforeach


                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="password">
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
                    <th class="text-center" style="font-size: 14px">Email</th>
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
                        <td>{{ $x->email }}</td>
                        <td>{{ $x->nm_peran }}</td>
                        <td class="text-center">{{ $x->level }}</td>
                        <td class="text-center"> <a type="button" class="btn btn-info btn-icon"><span
                                    class="icon-pencil"></span></a>
                            <a type="button" class="btn btn-danger btn-icon"><span class="icon-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
