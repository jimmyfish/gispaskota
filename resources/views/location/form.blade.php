@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.location.post') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Nama tempat</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Jam beroperasi</label>
                            <div class="row">
                                <div class="col-6 col-md-2">
                                    <input type="number" name="operation_hours[start]" id="" class="form-control">
                                </div>
                                <div class="col-6 col-md-2">
                                    <input type="number" name="operation_hours[end]" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Kisaran harga</label>
                            <div class="row">
                                <div class="col-6 col-md-2">
                                    <input type="number" name="price_range[start]" id="" class="form-control">
                                </div>
                                <div class="col-6 col-md-2">
                                    <input type="number" name="price_range[end]" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Letak geografis</label>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <input type="number" name="geolocation[lat]" id="" class="form-control">
                                </div>
                                <div class="col-6 col-md-4">
                                    <input type="number" name="geolocation[lng]" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Kategori</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="submit" value="Buat Baru" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
