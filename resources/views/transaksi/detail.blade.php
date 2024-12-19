@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="name mt-3">
                        <h4>Transaksi {{ $transOrder->customer->customer_name }}</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-cta mt-3 d-flex justify-content-end">
                        <a href="#" class="btn btn-warning me-3">Edit</a>
                        <a href="#" class="btn btn-info">Print</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="title mt-3">
                        <h5>Detail Transaksi</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Kode Transaksi</th>
                                <td>{{ $transOrder->trans_code }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Rental</th>
                                <td>{{ $transOrder->date_rented }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Dikembalikan</th>
                                <td>{{ $transOrder->date_returned }}</td>
                            </tr>
                            <tr>
                                <th>Status Rental</th>
                                <td>

                                    @if ($transOrder->status == 0)
                                        <span class="badge text-bg-warning">Sedang Dirental</span>
                                    @elseif ($transOrder->status == 1)
                                        <span class="badge text-bg-success">Sudah Dikembalikan</span>
                                    @elseif ($transOrder->status == 2)
                                        <span class="badge text-bg-danger">Belum Dikembalikan</span>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="title mt-3">
                        <h5>Detail Customer</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Customer</th>
                                <td>{{ $transOrder->customer->customer_name }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telephone</th>
                                <td>{{ $transOrder->customer->phone }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $transOrder->customer->email }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $transOrder->customer->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="title mt-3">
                        <h5>Detail Rental</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Foto Mobil</th>
                                    <th>Merk</th>
                                    <th>Nama Mobil</th>
                                    <th>Harga Sewa</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($details as $detail)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('images/' . $detail->car->foto) }}" width="100"
                                                alt="">
                                        </td>
                                        <td>
                                            {{ $detail->car->merk }}
                                        </td>
                                        <td>
                                            {{ $detail->car->car_name }}
                                        </td>
                                        <td>
                                            {{ $detail->car->price }}
                                        </td>
                                        <td>
                                            {{ $detail->qty }}
                                        </td>
                                        <td>
                                            {{ $detail->subtotal }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" align="right">Total</td>
                                    <td>
                                        <input type="number" value="{{ $transOrder->total_amount }}"
                                            class="total-harga form-control" readonly>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="right">Bayar</td>
                                    <td>
                                        <input type="number" value="{{ $transOrder->order_pay }}"
                                            class="bayar form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="right">kembalian</td>
                                    <td>
                                        <input type="number" value="{{ $transOrder->order_change }}"
                                            class="bayar form-control">
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
