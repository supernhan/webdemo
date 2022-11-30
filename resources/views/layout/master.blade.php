<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin-style.css') }}" >
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

    @yield('styles')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="col-sm-12" style="background-color: #ccc">
        <footer class="page-footer font-small blue pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-12 mt-md-0 mt-3">
                    </div>
                </div>
            </div>
        </footer>
        @yield('scripts')
</body>

</html>
