@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.update', $data->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" value="{{ $data->username }}">
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $data->email }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Level</label>
                            <select name="id_level" class="form-control" id="">
                                {{-- <option value="{{ $levels->id }}">{{ $levels->nama_level }}</option> --}}
                                @foreach ($levels as $level)
                                    <option value="{{ $level->id }}"
                                        {{ $level->id == $data->id_level ? 'selected' : '' }}>{{ $level->nama_level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary mt-3" type="submit">Kirim</button>
            </form>
        </div>
    </div>
@endsection
