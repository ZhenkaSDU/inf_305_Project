<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>IvanFilms</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    </head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container container-fluid">
          <a class="navbar-brand">IvanFilms</a>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
    </nav>
    <h1>Update film</h1>
    <form action="/update" method="POST" type="array">

    <div class="form">
            @foreach ($data as $data)

            @csrf
                <input type="hidden" name="show_id" value="{{$data->show_id}}">
            <div>
                <input type="text" name="type" value="{{$data->type}}"><br><br>
                <input type="text" name="title" value="{{$data->title}}"><br><br>
                <input type="text" name="director" value="{{$data->director}}"><br><br>
                <input type="text" name="cast" value="{{$data->cast}}"><br><br>
                <input type="text" name="country" value="{{$data->country}}"><br><br>
            </div>
            <div>
                <input type="text" name="date_added" value="{{$data->date_added}}"><br><br>
                <input type="text" name="release_year" value="{{$data->release_year}}"><br><br>
                <input type="text" name="rating" value="{{$data->rating}}"><br><br>
                <input type="text" name="duration" value="{{$data->duration}}"><br><br>
                <input type="text" name="listed_in" value="{{$data->listed_in}}"><br><br>
                <input type="text" name="description" value="{{$data->description}}"><br><br>
            </div>
            <button class="btn btn-warning" type="submit">Update</button>
            @endforeach


    </div>
</form>

</body>
</html>

<Style>
    body{
        color:#f0f5f9;
        background-color: #1e2022;
        text-align: center;
    }
    .form{
        display: inline;
        margin: auto;
        background-color: #292b2c;
    }
</Style>
