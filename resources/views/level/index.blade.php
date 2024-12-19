@extends('layout.app')

@section('content')
    <div class="mt-3">
        <div class="btn-cta d-flex mb-3 justify-content-end">
            <a href="{{ route('level.create') }}" class="btn btn-primary">Tambah Level</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-stripped">
                <thead class="bg-info">
                    <tr>
                        <th>No</th>
                        <th>Nama Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($DataLevels as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->nama_level ?? '-' }}</td>
                            <td>
                                <div class="btn-cta d-flex gap-2">
                                    <a href="{{ route('level.edit', $val->id) }}" class="btn btn-icon btn-warning">
                                        <span>edit</span>
                                    </a>
                                    <form action="{{ route('level.destroy', $val->id) }}" method="POST">
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
