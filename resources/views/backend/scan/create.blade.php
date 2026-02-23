@extends('backend.layouts.app')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-xl-4 col-sm-7 box-col-3">
                        <h3>Scan New City</h3>
                    </div>
                    <div class="col-5 d-none d-xl-block"></div>
                    <div class="col-xl-3 col-sm-5 box-col-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('back/assets/svg/icon-sprite.svg') }}#stroke-home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Scan City</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('admin.scan.store') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="city" class="form-label">City Name</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror"
                                           id="city" name="city" value="{{ old('city') }}" required>
                                    @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="country_code" class="form-label">Country Code</label>
                                    <input type="text" class="form-control @error('country_code') is-invalid @enderror"
                                           id="country_code" name="country_code" value="{{ old('country_code', 'TR') }}"
                                           maxlength="2" required>
                                    @error('country_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Two‑letter country code, e.g., TR, US, DE</small>
                                </div>

                                <div class="mb-3">
                                    <label for="categories" class="form-label">Categories (optional)</label>
                                    <input type="text" class="form-control" id="categories" name="categories"
                                           value="{{ old('categories') }}" placeholder="Restaurant, Cafe, Bakery, ...">
                                    <small class="text-muted">Comma‑separated list. If empty, default categories will be used.</small>
                                </div>

                                <button type="submit" class="btn btn-primary">Trigger Scan</button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
