@extends('layouts.app')
@section('page-title')
    @yield('page-title')
@endsection
@section('app')
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        @include('partials.navbar')

        <!-- Sidebar -->

        @include('partials.sidebar')

        <main class="p-4 md:ml-64 h-auto pt-20">
            @yield('auth_content')

        </main>
    </div>
@endsection
