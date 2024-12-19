@extends('layout.app')

@section('content')
    <div class="mt-3">
        <div class="btn-cta d-flex mb-3 justify-content-end">
            <a href="{{ route('customer.create') }}" class="btn btn-primary">Tambah Customer</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-stripped">
                <thead class="bg-info text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>NIK</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->customer_name ?? '-' }}</td>
                            <td>{{ $val->nik ?? '-' }}</td>
                            <td>{{ $val->phone ?? '-' }}</td>
                            <td>{{ $val->email ?? '-' }}</td>
                            <td>{{ $val->address ?? '-' }}</td>
                            <td>
                                <div class="btn-cta d-flex gap-2">
                                    <a href="{{ route('customer.edit', $val->id) }}" class="btn btn-icon btn-warning">
                                        <span>Edit</span>
                                    </a>
                                    <form action="{{ route('customer.destroy', $val->id) }}" method="POST">
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
