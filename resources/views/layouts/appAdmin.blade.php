<html>
    <head>
       <title>Future Career</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
   </head>
<body>
    <div class="container">
        @include('inc.topnavAdmin')
        <div>
        <form action="{{route('dash')}}" method="">

            @yield('content')
        </div>
    </div>

</body>
</html>