@extends('layouts.app')
 
@section('content')
<div class="container">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a type="button" class="btn btn-primary text-white mb-4" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class="bi bi-plus-circle"></i>
                  Tambah
                </a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Sinopsis</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Image</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $dt)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$dt->judul}}</td>
                        <td>{{$dt->sinopsis}}</td>
                        <td>{{$dt->tahun}}</td>
                        <td>{{$dt->rating}}</td>
                        <td>
                            <img src="{{$dt->img_url}}" width="70px" alt="">
                        </td>
                        <td>
                            <a type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal-{{$dt->id}}"><i class="bi bi-plus-circle"></i>
                                Edit
                            </a>
                            <a href="/admin/film/hapus/{{$dt->id}}" class="btn btn-danger">Hapus</a>
                            <a href="/admin/film/detail/{{$dt->id}}" class="btn btn-success">Detail</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
</div>
 
<!-- Modal tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Modal Tambah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
      <form method="POST" action="/admin/film/tambah/data-film">
        @csrf
 
        <!-- Judul -->
        <div class="row mb-3">
            <label for="judul" class="col-md-4 col-form-label text-md-end">{{ __('Judul') }}</label>
            <div class="col-md-6">
                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
                @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Judul -->
        <!-- Sinopsis -->
        <div class="row mb-3">
            <label for="sinopsis" class="col-md-4 col-form-label text-md-end">{{ __('Sinopsis') }}</label>
            <div class="col-md-6">
                <textarea id="sinopsis" type="text" class="form-control @error('sinopsis') is-invalid @enderror" name="sinopsis" value="{{ old('sinopsis') }}" required autocomplete="sinopsis" autofocus></textarea>
                @error('sinopsis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Sinopsis -->
        <!-- Tahun -->
        <div class="row mb-3">
            <label for="tahun" class="col-md-4 col-form-label text-md-end">{{ __('Tahun') }}</label>
            <div class="col-md-6">
                <input id="tahun" type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" required autocomplete="tahun" autofocus>
                @error('tahun')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Tahun -->
        <!-- Rating -->
        <div class="row mb-3">
            <label for="rating" class="col-md-4 col-form-label text-md-end">{{ __('Rating') }}</label>
            <div class="col-md-6">
                <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>
                @error('rating')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Rating -->
        <!-- Img Url -->
        <div class="row mb-3">
            <label for="img_url" class="col-md-4 col-form-label text-md-end">{{ __('Image URL') }}</label>
            <div class="col-md-6">
                <input id="img_url" type="text" class="form-control @error('img_url') is-invalid @enderror" name="img_url" value="{{ old('img_url') }}" required autocomplete="img_url" autofocus>
                @error('img_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Image URL -->
 
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
</form>
    </div>
  </div>
</div>
 
<!-- Modal Edit -->
@foreach($data as $dt)
<div class="modal fade" id="editModal-{{$dt->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
      <form method="POST" action="/admin/film/update/{{$dt->id}}">
        @csrf
 
        <!-- Judul -->
        <div class="row mb-3">
            <label for="judul" class="col-md-4 col-form-label text-md-end">{{ __('Judul') }}</label>
            <div class="col-md-6">
                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$dt->judul}}" required autocomplete="judul" autofocus>
                @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Judul -->
        <!-- Sinopsis -->
        <div class="row mb-3">
            <label for="sinopsis" class="col-md-4 col-form-label text-md-end">{{ __('Sinopsis') }}</label>
            <div class="col-md-6">
                <textarea id="sinopsis" type="text" class="form-control @error('sinopsis') is-invalid @enderror" name="sinopsis" required autocomplete="sinopsis" autofocus>{{$dt->sinopsis}}</textarea>
                @error('sinopsis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Sinopsis -->
        <!-- Rating -->
        <div class="row mb-3">
            <label for="rating" class="col-md-4 col-form-label text-md-end">{{ __('Rating') }}</label>
            <div class="col-md-6">
                <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{$dt->rating}}" required autocomplete="rating" autofocus>
                @error('rating')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Tahun -->
        <!-- Tahun -->
        <div class="row mb-3">
            <label for="tahun" class="col-md-4 col-form-label text-md-end">{{ __('Tahun') }}</label>
            <div class="col-md-6">
                <input id="tahun" type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{$dt->tahun}}" required autocomplete="tahun" autofocus>
                @error('tahun')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Tahun -->
 
        <!-- Image URL -->
        <div class="row mb-3">
            <label for="img_url" class="col-md-4 col-form-label text-md-end">{{ __('Image URL') }}</label>
            <div class="col-md-6">
                <input id="img_url" type="text" class="form-control @error('img_url') is-invalid @enderror" name="img_url" value="{{$dt->img_url}}" required autocomplete="img_url" autofocus>
                @error('img_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <!-- End Image URL -->
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </div>
</form>
    </div>
  </div>
</div>
@endforeach
 
@endsection