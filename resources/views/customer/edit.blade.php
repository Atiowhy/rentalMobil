@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('customer.update', $dataCus->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Customer Name</label>
                            <input type="text" name="customer_name" value="{{ $dataCus->customer_name }}"
                                class="form-control">
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">NIK</label>
                                <input type="text" name="nik" value="{{ $dataCus->nik }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Phone</label>
                            <input type="number" name="phone" value="{{ $dataCus->phone }}" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $dataCus->email }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Address</label>
                        <textarea name="address" cols="30" rows="10" class="form-control">{{ $dataCus->address }}</textarea>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>
                </div> --}}
                <button class="btn btn-primary mt-3" type="submit">Kirim</button>
            </form>
        </div>
    </div>
@endsection
