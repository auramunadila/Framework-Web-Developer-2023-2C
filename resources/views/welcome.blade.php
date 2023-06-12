<!DOCTYPE html>
<html>
<head>
    <title>My Laravel App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('_navbar')
    <div class="container">
        <h1>Welcome to my Laravel App</h1>
        <!-- Konten lainnya -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
