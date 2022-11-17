<!DOCTYPE html>
<html lang="en">

<head>
    <title>Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <ul class="nav justify-content-center" style="background-color: #e3f2fd;">
        <li class="nav-item">
            <a class="nav-link " href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/view')}}">View</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/edit')}}">Edit</a>
        </li>
    </ul>
    <div class="container"
        style="margin-top:100px;width:800px; display:flex ;flex-flow:column wrap; align-items:center; justify-content:center;">
        <h2 style="color:red;">{{$err}}</h2>
        <a href="{{url('/')}}" class="btn btn-primary"> Go back </a>
    </div>

</body>


</html>