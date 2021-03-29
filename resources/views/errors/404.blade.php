<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token and Meta Page -->
    <meta name="csrf-token" content="{{ csrf_token() }}" /> 
    <title>Halaman Tidak Dapat Ditemukan!</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-png" />
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" />
    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
</head>
<body>

    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center text-center">
            <div class="col-md-6">
                <img src="{{ asset('img/error-404.svg') }}" class="w-100" />
                <h3 class="text-center">Halaman Tidak Dapat Ditemukan!</h3>
                <p class="text-center text-muted">Maaf, halaman tidak dapat ditemukan! Mohon periksa kembali ejaan URL anda.</p>
                <a href="{{ URL::to('/') }}" class="btn btn-primary btn-dim"><i class="fas fa-home fa-fw mr-1"></i>Beranda</a>
            </div>
        </div>
    </div>
    
    <script>window.laravel = <?php echo json_encode([ 'csrf_tokens' => csrf_token(), 'base_url' => URL::to('/'), 'assets' => asset('/'), 'app_name' => config('app.name'), ]); ?></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>