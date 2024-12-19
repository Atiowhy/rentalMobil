@extends('layout.app')

@section('content')
    <div class="mt-3">

        <div class="table table-responsive">
            <table class="table table-bordered table-stripped">
                <thead class="bg-info">
                    <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Customer</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->trans_code }}</td>
                            <td>{{ $val->customer->customer_name ?? '-' }}</td>
                            <td>{{ $val->trans_date }}</td>
                            <td>{{ $val->total_amount }}</td>
                            <td>
                                @if ($val->status == 0)
                                    <span class="badge text-bg-warning">Sedang Dirental</span>
                                @elseif ($val->status == 1)
                                    <span class="badge text-bg-success">Sudah dikembalikan</span>
                                @elseif ($val->status == 2)
                                    <span class="badge text-bg-danger">Belum Dikembalikan</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-cta d-flex gap-2">
                                    <a href="{{ route('user.edit', $val->id) }}" class="btn btn-icon btn-warning">
                                        <span>Edit</span>
                                    </a>
                                    <a href="{{ route('admTrans.show', $val->id) }}" class="btn btn-icon btn-secondary">
                                        <span>Detail</span>
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
