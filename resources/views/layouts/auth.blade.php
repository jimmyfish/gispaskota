<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') Welcome to GIS Kota Pasuruan</title>
    @include('layouts.style')
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">&nbsp;</div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Please login to edit
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
            <div class="col-md-3">&nbsp;</div>
        </div>
    </div>

    @include('layouts.script')
</body>
</html>