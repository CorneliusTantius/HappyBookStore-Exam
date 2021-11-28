<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Region Additional Configurations --}}
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="Favicon.png">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Happy Book Store</title>
</head>

<body>
    @include('Components.header')
    <div class="d-flex flex-row justify-content-center mt-5"
        style="padding-left: 6vw; padding-right: 6vw; margin-left:6vw; margin-right:6vw; min-height: 74vh;">
        <div class="container-fluid content-container px-0 mx-0" style="width: 75%;">
            @yield('content')
        </div>
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 20%;">
            <span class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <span class="fs-4">Categories</span>
            </span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                @foreach ($categories as $category)
                    @if ($category_id == $category->category_id)
                        <li class="nav-item">
                            <a href="/category/{{$category->category_id}}" class="nav-link active text-black" style="background: #FFE300;border-radius: 1em;"
                                aria-current="page">{{ $category->category_name }}</a>
                        </li>
                    @else
                        <li>
                            <a href="/category/{{$category->category_id}}" class="nav-link">{{ $category->category_name }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <hr>
        </div>
    </div>
    <footer class="footer py-3 bg-light mt-auto">
        <div class="container">
            <span class="text-muted">© Happy Book Store - Cornelius Tantius - 2301859650 - 2021</span>
        </div>
    </footer>    
</body>
</html>
