@extends('layouts.dashboard')

@section('title', "Listing Location")

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('dashboard.location.new') }}" class="btn btn-primary btn-sm">Buat baru</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Tempat</th>
                    <th>Lat</th>
                    <th>Lng</th>
                    <th>Lokasi</th>
                    <th>Kelola</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $i = 1;
                @endphp
                @if (count($locations) === 0)
                <tr>
                    <td colspan="7">Tidak ada data. <a href="{{ route('dashboard.location.new') }}">Buat baru</a></td>
                </tr>
                @endif
                @foreach($locations as $location)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>&nbsp;</td>
                        <td>{{ $location->title }}</td>
                        <td>{{ $location->geolocation->lat }}</td>
                        <td>{{ $location->geolocation->lng }}</td>
                        <td>{{ $location->address }}</td>

                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection