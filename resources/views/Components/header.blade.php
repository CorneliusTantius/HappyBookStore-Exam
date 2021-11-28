<div class="w-100 p-25 justify-content-center text-center" style="background-color: #009DAE; color:white; padding: 2vh">
    <h1> Happy Book Store </h1>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 5vh;">
    <div class="container d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($categories as $category)
                                @if ($category_id == $category->category_id)
                                    <li><a class="dropdown-item active" style="background: #FFE300; color: black;" href="/category/{{$category->category_id}}">{{$category->category_name}}</a></li>
                                @else
                                    <li><a class="dropdown-item" href="/category/{{$category->category_id}}">{{$category->category_name}}</a></li>
                                @endif
                            @endforeach                            
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
