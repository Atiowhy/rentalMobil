@extends('layout.app')

@section('content')
    <div class="mt-3">
        <div class="btn-cta d-flex mb-3 justify-content-end">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-stripped">
                <thead class="bg-info">
                    <tr>
                        <th>No</th>
                        <th>Level</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataUsers as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->levelName->nama_level ?? '-' }}</td>
                            <td>{{ $val->username }}</td>
                            <td>{{ $val->email }}</td>
                            <td>
                                <div class="btn-cta d-flex gap-2">
                                    <a href="{{ route('user.edit', $val->id) }}" class="btn btn-icon btn-warning">
                                        <span>Edit</span>
                                    </a>
                                    <form action="{{ route('user.destroy', $val->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
