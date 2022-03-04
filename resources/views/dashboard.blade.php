@extends('layout')

@section('main')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Giriş Paneli') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        GİRİŞ YAPTINIZ!

                        <div class="dashboard">
                            <ul>
                                <li><a href="{{route('blog.create')}}">Post Oluştur</a></li>
                                <li><a href="{{route('categories.create')}}">Kategori Oluştur</a></li>
                                <li><a href="{{route('categories.index')}}">Kategori Listesi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

@endsection


