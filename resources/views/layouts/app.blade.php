<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyectos gobierno</title>
    
    <link rel="icon" href="{{ asset('imgs/gob.png') }}" type="image/png">
    
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
   
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="main-footer">
        <div class="container">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2023 <a href="#">Joaquin Ernesto Rodriguez Polanco</a>.</strong>
        </div>
    </footer>
</div>
@yield('third_party_scripts')
@stack('page_scripts')

</body>
</html>
