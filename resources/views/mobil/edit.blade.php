@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('car.update', $dataEdit->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md">
                        <div class="img mt-5 d-flex justify-content-center">
                            <img src="{{ asset('images/' . $dataEdit->foto) }}" alt="" width="500"
                                class="rounded-3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="merk d-flex justify-content-center mt-3">
                            <h4 class="text-muted">{{ $dataEdit->merk }}</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="car-name d-flex justify-content-center">
                            <h1>{{ $dataEdit->car_name }}</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="car-name d-flex justify-content-center">
                            <h4>{{ $dataEdit->year }}</h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Mileage</label>
                            <input type="text" name="mileage" class="form-control"
                                value="{{ $dataEdit->mileage }}Km/Hours">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Transmition</label>
                            <input type="text" name="transmition" class="form-control"
                                value="{{ $dataEdit->transmition }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Luggage</label>
                            <input type="text" name="lugage" class="form-control" value="{{ $dataEdit->lugage }} Bags">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Seats</label>
                            <input type="text" name="seats" class="form-control" value="{{ $dataEdit->seats }} Seats">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Year</label>
                            <input type="text" name="year" class="form-control" value="{{ $dataEdit->year }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Color</label>
                            <input type="text" name="color" class="form-control" value="{{ $dataEdit->color }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Fuel</label>
                            <input type="text" name="fuel" class="form-control" value="{{ $dataEdit->fuel }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Status</label>
                            <select name="id_status" id="" class="form-control">
                                {{-- <option value="{{ $dataEdit->id_status }}">{{ $dataEdit->status_name }}</option> --}}
                                @foreach ($status as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $dataEdit->id_status ? 'selected' : '' }}>{{ $item->status_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" value="{{ $dataEdit->price }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md">
                        <label for="" class="form-lable">Features</label>
                        <textarea id="summernote" class="form-control" cols="30" rows="10">{{ $dataEdit->feature }}</textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md">
                        <label for="" class="form-lable">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="10">{{ $dataEdit->description }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Kirim</button>
            </form>
        </div>
    </div>
@endsection
