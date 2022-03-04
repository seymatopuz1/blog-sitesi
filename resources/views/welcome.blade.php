@extends('layout')

@section('header')
    <!--Header-->
    <header class="header" style=" background-image: url({{asset("images/kpopana.jpg")}});">
        <div class="header-text">
            <h1>K-POP BLOG</h1>
            <h4>En güncel K-Pop Haberleri...</h4>
        </div>
        <div class="overlay"></div>
    </header>
@endsection

@section('main')
    <main class="container">
        <h2 class="header-title">Son KPOP haberleri</h2>
        <section class="cards-blog latest-blog">

        @foreach($posts as $post )<!--DB ten güncel olarak paylaşımı ne zaman yaptığını sağlıyor-->
            <div class="card-blog-content">
                <img src="{{asset($post->imagePath)}}" alt="" />
                <p>
                    {{$post->created_at->diffForHumans()}}
                    <span>Editör:{{$post->user->name}}</span>
                </p>
                <h4>
                    <a href="{{route('blog.show', $post)}}">{{$post->title}}</a>
                </h4>
            </div>
            @endforeach
        </section>
    </main>
@endsection
