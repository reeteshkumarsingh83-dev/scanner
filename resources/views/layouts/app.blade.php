<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <title>Scanner</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="page-wrapper">
        @include('header')

        <main class="py-4">
                    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                
            @endif
            @yield('content')
            
        </main>
        @include('footer')
    </div>
    <!-- Main JS File -->
    <!-- <script src="assets/js/theme.min.js"></script> -->
</body>
</html>
