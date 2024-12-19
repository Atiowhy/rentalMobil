@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('level.update', $dataLevel->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Nama Level</label>
                            <input type="text" name="nama_level" class="form-control"
                                value="{{ $dataLevel->nama_level }}">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Kirim</button>
            </form>
        </div>
    </div>
@endsection
