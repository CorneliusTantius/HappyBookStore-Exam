@extends('Layouts.main')
@section('content')
    <div class="px-0 text-center">
        <h1 class="display-5 py-3 mx-5" style="background: #FFE300; border-radius: 1em;">{{$context}}</h1>
        <div class="mx-auto px-5 py-3">
            <h1 class="display-8 fw-bold">{{$book->title}}</h1>
            <hr>
            <img style="height: 40vh;" src="{{$details->img_url}}" alt="">
            <p><strong>Author</strong>: {{$details->author}}</p>
            <p><strong>Publisher</strong>: {{$details->publisher}}</p>
            <p><strong>Year</strong>: {{$details->year}}</p>
            <hr>
            <div class="mx-5 px-5">
                <p class="lead mb-4 px-5 mx-5">{{$details->description}}</p>
            </div>
            <hr>
        </div>
    </div>
@endsection
