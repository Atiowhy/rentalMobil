@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <div class="img mt-5 d-flex justify-content-center">
                        <img src="{{ asset('images/' . $data->foto) }}" alt="" width="500" class="rounded-3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="merk d-flex justify-content-center mt-3">
                        <h4 class="text-muted">{{ $data->merk }}</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="car-name d-flex justify-content-center">
                        <h1>{{ $data->car_name }}</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="car-name d-flex justify-content-center">
                        <h4>{{ $data->year }}</h4>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">Mileage</label>
                        <input type="text" class="form-control" value="{{ $data->mileage }}Km/Hours" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">Transmition</label>
                        <input type="text" class="form-control" value="{{ $data->transmition }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">Luggage</label>
                        <input type="text" class="form-control" value="{{ $data->lugage }} Bags" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">Seats</label>
                        <input type="text" class="form-control" value="{{ $data->seats }} Seats" readonly>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">Year</label>
                        <input type="text" class="form-control" value="{{ $data->year }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">Color</label>
                        <input type="text" class="form-control" value="{{ $data->color }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">Fuel</label>
                        <input type="text" class="form-control" value="{{ $data->fuel }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">Status</label>
                        @php
                            $statusLabels = [
                                1 => 'Rented',
                                2 => 'Available',
                                3 => 'Not Available',
                                4 => 'Maintenance',
                                5 => 'Returned',
                            ];
                            // dd($data->id_status);
                        @endphp
                        <input type="text" class="form-control"
                            value="{{ $statusLabels[$data->id_status] ?? 'Unknown Status' }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <label for="" class="form-lable">Features</label>
                    <textarea readonly class="form-control" cols="30" rows="10">{{ nl2br(strip_tags(str_replace(['<ul>', '</ul>', '<ol>', '</ol>', '<li>'], ["\n- ", "\n", "\n1. ", "\n", '  '], $data->feature), '<b><i><u>')) }}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md">
                    <label for="" class="form-lable">Description</label>
                    <textarea readonly class="form-control" cols="30" rows="10">{{ nl2br(strip_tags(str_replace(['<ul>', '</ul>', '<ol>', '</ol>', '<li>'], ["\n- ", "\n", "\n1. ", "\n", '  '], $data->feature))) }}</textarea>
                </div>
            </div>
            <a href="{{ route('car.edit', $data->id) }}" class="btn btn-warning px-5 py-2 mt-3">Edit</a>
        </div>
    </div>
@endsection
