<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- NavBar -->

    <!-- Navbar content -->
    <ul class="nav justify-content-center" style="background-color: #e3f2fd;">
        <li class="nav-item">
            <a class="nav-link " href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">View</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{url('/edit')}}">Edit</a>
        </li>
    </ul>

    <div class="container " style="margin:10px auto;">


    </div>



</body>

</html>