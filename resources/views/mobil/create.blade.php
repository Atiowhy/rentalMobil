@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Merk</label>
                            <input type="text" name="merk" class="form-control">
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Kilometer</label>
                            <input type="text" name="mileage" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Nama Mobil</label>
                            <input type="text" name="car_name" class="form-control">
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Transmisi</label>
                            <input type="text" name="transmition" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Tempat Duduk</label>
                            <input type="text" name="seats" class="form-control">
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Bagasi</label>
                            <input type="text" name="lugage" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Bensin</label>
                            <input type="text" name="fuel" class="form-control">
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Warna</label>
                            <input type="text" name="color" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Tahun</label>
                            <input type="year" name="year" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Harga</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Status</label>
                            <select name="id_status" class="form-control">
                                <option value="">--set status--</option>
                                @foreach ($status as $item)
                                    <option value="{{ $item->id }}">{{ $item->status_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Fitur</label>
                            <textarea id="summernote" name="feature" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3" id="saveButton" type="submit">Kirim</button>
            </form>
        </div>
    </div>
@endsection
