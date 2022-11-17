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
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/view')}}">View</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/edit')}}">Edit</a>
        </li>
    </ul>

    <div class="container " style="margin:10px auto;">

        <form action="{{route('addBatch')}}" method="post">
            @csrf
            <label for="batch-no">Batch No</label>
            <input type="text" placeholder="Enter Batch No" id="batch-no" name="batch_no" autofocus>
            <br>
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity">
            <br>

            <label for="status">Status</label>
            <select name="status" id="status" name="status">
                <option value="Good">Good</option>
                <option value="bad">Bad</option>
                <option value="average">Average</option>
            </select>
            <br>

            <label for="remarks">Remarks</label>
            <textarea id="remarks" rows="5" cols="50" name="remarks">

            </textarea>
            <button type="submit">Add</button>


        </form>
    </div>



</body>

</html>