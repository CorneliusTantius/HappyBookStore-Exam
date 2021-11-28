@extends('Layouts.main')
@section('content')
    <script>
        function trigger(id){
            var x = document.getElementById("book-"+id);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <div class="px-0 text-center">
        <h1 class="display-5 py-3 mx-5" style="background: #FFE300; border-radius: 1em;">{{$context}}</h1>
        <div class="mx-auto px-5 py-3">
            <table class="table" style="border-collapse:collapse;" id="books">
                <caption>
                    {{$books->links()}}
                </caption>
                <thead>
                    <tr>
                        <th scope="col" style="width: 40%">Title</th>
                        <th scope="col">Author</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($books->total() == 0)
                        <tr>
                            <td colspan="12">
                                Couldn't find any book for this entry...
                            </td>
                        </tr>
                    @else
                    @foreach ($books as $book)
                        <tr>
                            <td>
                                <a href="#book{{$book->book_id}}" onclick="trigger({{$book->book_id}});" class="text-decoration-none">
                                    {{$book->title}}
                                </a>
                            </td>
                            <td>{{$book->details->author}}</td>
                        </tr>
                        <tr>
                            <td colspan="12" class="" >
                                <div class="" id="book-{{$book->book_id}}" style="display: none"> 
                                    <a href="/details/{{$book->book_id}}" class="btn btn-primary">View More About {{$book->title}}</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
