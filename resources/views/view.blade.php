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
            <a class="nav-link" href="{{url('/edit')}}">Edit</a>
        </li>
    </ul>

    <div class="container " style="margin:10px auto;">

        <form action="{{route('searchDate')}}" method="get">

            <label for="date">Search By Date:</label>
            <input type="date" id="date" name="date">


            <button type="submit" class="btn btn-outline-primary">Search</button>
            <!-- 
            <select id="batch_no" name="batch_no" style="width:150px;">
                @foreach($list as $batch)
                <option value="{{$batch->batch_no}}">{{$batch->batch_no}}</option>
                @endforeach
            </select> -->
        </form>
        <table class="table">
            <tr>

                <th>Batch No</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>Manufactured</th>
                <th>Actions</th>
            </tr>
            @foreach($list as $batch)
            <tr>
                <td>{{$batch->batch_no}}</td>
                <td>{{$batch->quantity}}</td>
                <td>{{$batch->status}}</td>
                <td>{{$batch->remarks}}</td>
                <td>{{$batch->created_at}}</td>
                <td> <button class="btn btn-primary">Edit</button>
                    <a href="{{url('/delete/'. $batch->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>


            @endforeach
        </table>

    </div>



</body>

</html>