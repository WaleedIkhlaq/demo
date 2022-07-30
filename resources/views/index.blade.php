<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('/css/custom.css') }}">

</head>
<body>
<div id="app" class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card">
                    <div class="card-header">
                        <input type="text" class="form-control" id="countriesSearch" placeholder="Search Country...">
                    </div>
                    <div class="card-body">
                        @include('partials._countries', ['countries' => $countries])
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card">
                    <div class="card-header">
                        <input type="text" class="form-control" id="stateSearch" placeholder="Search State...">
                    </div>
                    <div class="card-body">
                        <ul class="lists" id="states"></ul>
                    </div>
                    <div class="card-footer">
                        <h5 class="mb-0">Select a Country</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card">
                    <div class="card-header">
                        <input type="text" class="form-control" id="citySearch" placeholder="Search City...">
                    </div>
                    <div class="card-body">
                        <ul class="lists" id="cities"></ul>
                    </div>
                    <div class="card-footer">
                        <h5 class="mb-0">Select a State</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset ('/js/custom.js?ver='.rand ()) }}"></script>
</body>
</html>