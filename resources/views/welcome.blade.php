<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token and Meta Page -->
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/brands/favicon.png') }}" type="image/x-png" />
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" />
    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
</head>
<body>
    <div id="app"></div>
    
    <script>window.laravel = <?php echo json_encode([ 'csrf_tokens' => csrf_token(), 'base_url' => URL::to('/'), 'assets' => asset('/'), 'app_name' => config('app.name'), 'config' => Config::all() ]); ?></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>