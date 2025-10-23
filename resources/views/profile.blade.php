@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')

<div class="container mx-auto px-6 py-8">
    <div class="bg-gray-900 p-8 rounded-lg shadow-md max-w-2xl mx-auto">

        <h1 class="text-3xl font-bold text-gray-100 mb-6">
            Profile Saya
        </h1>

        <div class="space-y-4">
            <div class="flex py-2 border-b border-gray-700">
                <span class="w-1/3 text-gray-400 font-medium">Username</span>
                <span class="w-2/3 text-gray-100 font-semibold">{{ $username }}</span>
            </div>

            <div class="flex py-2 border-b border-gray-700">
                <span class="w-1/3 text-gray-400 font-medium">Nama Lengkap</span>
                <span class="w-2/3 text-gray-100">{{ ucfirst($username) }}</span>
            </div>
            
            <div class="flex py-2 border-b border-gray-700">
                <span class="w-1/3 text-gray-400 font-medium">Email</span>
                <span class="w-2/3 text-gray-100">{{ $username }}@gmail.com</span>
            </div>
            
            <div class="flex py-2 border-b border-gray-700">
                <span class="w-1/3 text-gray-400 font-medium">Hak Akses</span>
                <span class="w-2/3 text-gray-100 font-medium text-green-600">Administrator</span>
            </div>
            
            <div class="flex py-2">
                <span class="w-1/3 text-gray-400 font-medium">Tanggal Bergabung</span>
                <span class="w-2/3 text-gray-100">{{ date('d F Y') }}</span>
            </div>

        </div>
        
    </div>
</div>

@endsection

