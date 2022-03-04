@extends('layout')
@section('head')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('main')
    <main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Postu Düzenle!</h1>
            @include('includes.flash-message')
        <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{route('blog.update', $post )}}" method="post"  enctype="multipart/form-data">
                @method('put')
                @csrf
                <!-- Title -->
                    <label for="title"><span>BAŞLIK</span></label>
                    <input type="text" id="title" name="title" value="{{ $post->title }}" />
                    @error('title')
                    {{--The $attributeValue field is/must $validationRule--}}
                    <p style="color: red; margin-bottom:25px">{{$message}}</p>
                    @enderror
                <!-- Image -->
                    <label for="image"><span>RESİM</span></label>
                    <input type="file" id="image" name="image" />
                    @error('image')
                    {{--The $attributeValue field is/must $validationRule--}}
                    <p style="color: red; margin-bottom:25px">{{$message}}</p>
                    @enderror

                <!-- Body-->
                    <label for="body"><span>METİN</span></label>
                    <textarea id="body" name="body">{{$post->body}}</textarea>
                    @error('body')
                    {{--The $attributeValue field is/must $validationRule--}}
                    <p style="color: red; margin-bottom:25px">{{$message}}</p>
                @enderror
                <!-- Button -->
                    <input type="submit" value="Gönder" />
                </form>
            </div>

        </section>
    </main>

@endsection

@section('scripts')
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection
