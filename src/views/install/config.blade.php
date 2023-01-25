@extends('installer::layouts.master')

@section('content')
    <div class="preloader" style="display: none;">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="120px" height="120px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#6466f1" stroke-dasharray="50.26548245743669 50.26548245743669" fill="none" stroke-linecap="round">
                <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
                </circle>
                <circle cx="50" cy="50" r="23" stroke-width="8" stroke="#8e8aff" stroke-dasharray="36.12831551628262 36.12831551628262" stroke-dashoffset="36.12831551628262" fill="none" stroke-linecap="round">
                <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;-360 50 50"></animateTransform>
                </circle></svg>
                <p class=" text-2xl text-gray-600">Please Wait... It will take several times.</p>
        </div>

    </div>
    <div class="bg-yellow-50 min-h-screen">
        <div class="container mx-auto">
            <div class="flex space-x-8 py-20 relative">
                @include('installer::layouts.partials.sidebar')
                <div class=" bg-white h-auto rounded-lg w-full px-12 py-12">
                    <h2 class="text-center text-4xl font-medium">Configurations</h2>
                    <form id="formsubmit" action="#">
                        <div class="relative overflow-x-auto mt-8">
                            <div class="mb-5">
                                <label for="app_name" class=" block text-xl text-gray-500 font-light mb-2">APP NAME</label>
                                <input id="app_name" type="text" value="{{ env('APP_NAME') }}" name="APP_NAME" class="w-full border border-slate-200 rounded-md h-14 px-5 placeholder:text-gray-300 placeholder:font-light  placeholder:text-lg" placeholder="App Name">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-xl text-gray-500 font-light mb-2 text-uppercase">DATABASE CONNECTION</label>
                                    <input type="text" name="DB_CONNECTION" value="{{ env('DB_CONNECTION') }}" class="w-full border border-slate-200 rounded-md h-14 px-5 placeholder:text-gray-300 placeholder:font-light" placeholder="mysql">
                                </div>
                                <div>
                                    <label for="name" class="block text-xl text-gray-500 font-light mb-2">DATABASE HOST</label>
                                    <input name="DB_HOST" value="{{ env('DB_HOST') }}" type="text" class="w-full border border-slate-200 rounded-md h-14 px-5 placeholder:text-gray-300 placeholder:font-light" placeholder="localhost">
                                </div>
                                <div>
                                    <label for="name" class="block text-xl text-gray-500 font-light mb-2">DATABASE PORT</label>
                                    <input name="DB_PORT" value="{{ env('DB_PORT') }}" type="text" class="w-full border border-slate-200 rounded-md h-14 px-5 placeholder:text-gray-300 placeholder:font-light" placeholder="3306">
                                </div>
                                <div>
                                    <label for="name" class="block text-xl text-gray-500 font-light mb-2">DATABASE NAME</label>
                                    <input name="DB_DATABASE" type="text" class="w-full border border-slate-200 rounded-md h-14 px-5 placeholder:text-gray-300 placeholder:font-light" placeholder="Database Name">
                                </div>
                                <div>
                                    <label for="name" class="block text-xl text-gray-500 font-light mb-2">DATABASE USERNAME</label>
                                    <input name="DB_USERNAME" type="text" class="w-full border border-slate-200 rounded-md h-14 px-5 placeholder:text-gray-300 placeholder:font-light" placeholder="Database Username">
                                </div>
                                <div>
                                    <label for="name" class="block text-xl text-gray-500 font-light mb-2">DATABASE PASSWORD</label>
                                    <input name="DB_PASSWORD" type="text" class="w-full border border-slate-200 rounded-md h-14 px-5 placeholder:text-gray-300 placeholder:font-light" placeholder="Database Password">
                                </div>
                            </div>
                            <button type="submit" class="mt-8 bg-indigo-500 px-10 text-white rounded-md float-right py-3 flex items-center text-lg"><span>Next</span> <svg class=" fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.3/axios.min.js" integrity="sha512-L4lHq2JI/GoKsERT8KYa72iCwfSrKYWEyaBxzJeeITM9Lub5vlTj8tufqYk056exhjo2QDEipJrg6zen/DDtoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('#formsubmit').on('submit', function(e){
        e.preventDefault();
        $('.preloader').fadeIn('show');
        const data = Object.fromEntries(new FormData(e.target).entries());

        axios.post("/install/configuration", data).then(function (response) {
            if(response.data.success)
            {
                migrate();
            }
            console.log(response.data.success)
        })
    });

    function migrate()
    {
        axios.post("/install/migrate").then(function (response) {
            if(response.data.success)
            {
                $('.preloader').fadeOut('show');
                window.location.href = '/install/complete';
            }
        }).catch(function (error) {
            $('.preloader').fadeOut('show');
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: error.response.data.errors,
            })
        });
    }
</script>
@endpush
