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
