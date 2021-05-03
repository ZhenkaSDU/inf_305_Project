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
          {{-- <a class="btn btn-dark" href="{{url('info')}}" style="color: #c9d6df\
">Next Page</a> --}}
          <a class="btn btn-dark" href="{{url('data_edit')}}" style="color: #c9d6df">Data edit</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
    </nav>

    <style>
        body{
            background-color: #1e2022;
        }
        .description{
            margin-top: 3vw;
            display: flex;
        }
        .description .img_div{
            margin-left: 5vw;
        }
        .description h2{
            color: #f0f5f9;
        }
        .description h4, p, div{
            color: #f0f5f9;
        }
        .first_div{
            width: 80%;
        }
    </style>





    @foreach ($blog as $blogData)
        <div class="description container">
            <div class="first_div">
                <h2>{{$blogData->title}}</h2>
                <h4>{{$blogData->type}} | {{$blogData->date_added}} | {{$blogData->duration}}</h4>
                <br>
                <div>
                    Country: {{$blogData->country}}
                    <img src="{{$blogData->image_url}}" alt="" width="52" height="26">
                </div>
                <br>
                <p>{{$blogData->cast}}</p>
                <hr style="background-color: #c9d6df">
            </div>
            <div class="img_div">
                <img src="{{url("https://d13ezvd6yrslxm.cloudfront.net/wp/wp-content/images/avengers-endgame-chineseposter-frontpage-700x394.jpg")}}" width="400" height="" alt="">
            </div>
        </div>
    @endforeach

    {{-- @foreach ($blog as $blogdata)
        <h1>{{$blogdata}}</h1>
    @endforeach --}}


</body>
</html>



