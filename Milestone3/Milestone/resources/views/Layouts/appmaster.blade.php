<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
@include('layouts.Header')
    <div align="center">
        @yield('content')
    </div>
   

    

@include('layouts.Footer')
</body>
</html>