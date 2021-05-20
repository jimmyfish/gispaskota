@extends('layouts.dashboard')

@section('content')
<div class="card bg-gradient-primary">
    <div class="card-header border-0">
      <h3 class="card-title">
        <i class="fas fa-map-marker-alt mr-1"></i>
        Kota Pasuruan
      </h3>
      <!-- card tools -->
      <div class="card-tools">
        <button type="button"
                class="btn btn-primary btn-sm daterange"
                data-toggle="tooltip"
                title="Date range">
          <i class="far fa-calendar-alt"></i>
        </button>
        <button type="button"
                class="btn btn-primary btn-sm"
                data-card-widget="collapse"
                data-toggle="tooltip"
                title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <div class="card-body">
      <div id="world-map" style="height: 250px; width: 100%;"></div>
    </div>
  </div>
@endsection