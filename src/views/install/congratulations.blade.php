@extends('installer::layouts.master')

@section('content')
    <div class="bg-yellow-50 min-h-screen">
        <div class="container mx-auto">
            <div class="flex space-x-8 py-20 relative">
                @include('installer::layouts.partials.sidebar')
                <div class=" bg-white h-auto rounded-lg w-full px-12 py-12 text-center">
                    <h2 class="text-center text-4xl font-medium">Congratulations</h2>
                    <h2 class=" text-8xl mt-16">🎉</h2>
                    <p class=" mt-12 text-gray-500 text-2xl font-light">Your Site is Now Ready. You can Check It.</p>
                    <div class=" mt-8 mb-5">
                        <a class=" border border-indigo-500 px-7 py-3 rounded-md text-indigo-500 mr-3" href="{{ url('/') }}">View Site</a>
                        <a class="border border-indigo-500 bg-indigo-500 px-7 py-3 rounded-md text-white font-light" href="{{ url(config('installer.admin_login', '/admin/login')) }}">Admin Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
