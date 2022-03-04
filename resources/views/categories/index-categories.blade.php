@extends('layout')

@section('main')
    <div class="categories-list">
        <h1 style="padding-top: 50px;">Kategori Listesi</h1>
        @include('includes.flash-message')

        @foreach ($categories as $category)
            <div class="item">
                <p>{{ $category->name }}</p>
                <div>
                    <a href="{{ route('categories.edit', $category) }}">Edit</a>
                </div>
                <form action="{{route('categories.destroy', $category)}}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete">
                </form>
            </div>
        @endforeach

        <div class="index-categories">
            <a href="{{ route('categories.create') }}">Kategori Oluştur<span>&#8594;</span></a>
        </div>
    </div>
@endsection
