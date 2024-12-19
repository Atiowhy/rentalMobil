@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="POST">
                @method('post')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Customer Name</label>
                            <input type="text" name="customer_name" class="form-control">
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-3">
                                <label for="" class="form-label">NIK</label>
                                <input type="text" name="nik" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Address</label>
                        <textarea name="address" cols="30" rows="10" class="form-control"></textarea>
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
