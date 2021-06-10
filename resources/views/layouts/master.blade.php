<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
    <div style="margin-top: 10px; margin-left: 20px">
    <a href="{{url('/home')}}" style="text-decoration: none; padding: 8px; background-color: red; color: white; margin-bottom: 10px; margin-top: 10px" >Home</a>
    </div>
        @yield('content')

    </body>
</html>
