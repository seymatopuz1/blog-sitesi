@extends('layout')
@section('head')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('main')
    <main class="container" style="background-color: #fff;">
        <section id="contact-us">
            <h1 style="padding-top: 50px;">Yeni Post Oluştur!</h1>
        @include('includes.flash-message')

            <!-- Contact Form -->
            <div class="contact-form">
              <form action="{{route('blog.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
            <!-- Title -->
            <label for="title"><span>BAŞLIK</span></label>
            <input type="text" id="title" name="title"  />
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
            <!-- Drop down -->
                        <label for="categories"><span>Kategori Seçiniz:</span></label>
                        <select name="category_id" id="categories">
                            <option selected disabled>Seçiniz </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                        @enderror

            <!-- Body-->
            <label for="body"><span>METİN</span></label>
            <textarea id="body" name="body"></textarea>
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
