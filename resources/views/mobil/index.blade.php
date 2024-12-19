@extends('layout.app')

@section('content')
    <div class="mt-3">
        <div class="btn-cta d-flex mb-3 justify-content-end">
            <a href="{{ route('car.create') }}" class="btn btn-primary">Tambah Mobil</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-stripped">
                <thead class="bg-info">
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Nama Mobil</th>
                        <th>Warna</th>
                        <th>Tahun</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $val)
                        <tr>
                            <td>{{ $key + 1 ?? '-' }}</td>
                            <td>{{ $val->merk }}</td>
                            <td>{{ $val->car_name }}</td>
                            <td>{{ $val->color }}</td>
                            <td>{{ $val->year }}</td>
                            <td>{{ $val->description }}</td>
                            <td>
                                @if ($val->id_status == 1)
                                    <span class="badge text-bg-info">Rented</span>
                                @elseif ($val->id_status == 2)
                                    <span class="badge text-bg-primary">Available</span>
                                @elseif ($val->id_status == 3)
                                    <span class="badge text-bg-danger">Not Available</span>
                                @elseif ($val->id_status == 4)
                                    <span class="badge text-bg-warning">Maintenance</span>
                                @else
                                    <span class="badge text-bg-success">Returned</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-cta d-flex gap-2">
                                    {{-- <a href="{{ route('user.edit', $val->id) }}" class="btn btn-icon btn-warning">
                                        <span>Edit</span>
                                    </a> --}}
                                    <a href="{{ route('car.show', $val->id) }}" class="btn btn-icon btn-primary">
                                        <span>Detail</span>
                                    </a>
                                    <form action="{{ route('car.destroy', $val->id) }}" method="POST">
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
