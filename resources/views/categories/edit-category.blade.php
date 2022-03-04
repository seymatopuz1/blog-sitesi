@extends('layout')
@section('head')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('main')
    <main class="container" style="background-color: #ffffff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Kategoriyi Düzenle </h1>
        @include('includes.flash-message')

        <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{route('categories.update' , $category)}}" method="post" >
                @method('put')
                @csrf
                <!-- name -->
                    <label for="name"><span>Kategori Adı</span></label>
                    <input type="text" id="name" name="name" value="{{ $category->name }}" />
                    @error('name')
                    {{--The $attributeValue field is/must $validationRule--}}
                    <p style="color: red; margin-bottom:25px">{{ $message }}</p>
                @enderror

                <!-- Button -->
                    <input type="submit" value="Gönder" />
                </form>
            </div>
            <div class="create-categories">
                <a href="{{route('categories.index')}}"> KATEGORİ LİSTESİ  <span>&#8594;</span></a>
            </div>

        </section>
    </main>

@endsection

@section('scripts')
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection
