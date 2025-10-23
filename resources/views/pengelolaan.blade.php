@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold text-gray-100 mb-6">Daftar Buku</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach($buku as $item)
            <div class="bg-gray-900 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                
                <img src="{{ $item['foto'] }}" 
                     alt="Cover buku {{ $item['judul'] }}" 
                     class="w-full h-100 object-cover bg-gray-700">
                
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-100">
                        {{ $item['judul'] }}
                    </h3>
                    <p class="text-sm text-gray-300 mt-1">
                        oleh {{ $item['penulis'] }}
                    </p>
                    <span class="mt-3 inline-block bg-blue-900 text-blue-200 text-xs font-semibold px-2.5 py-0.5 rounded-full">
                        Stok: {{ $item['stok'] }}
                    </span>
                </div>
                
            </div>
        @endforeach

    </div>

</div>

@endsection

