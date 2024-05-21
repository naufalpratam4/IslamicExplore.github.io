@extends('layouts.auth')
@section('content')
    <nav class="bg-white border-gray-200 dark:bg-gray-900 px-10">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/login/logo.png') }}" class="h-8" alt="Flowbite Logo" />
            </a>
        </div>
    </nav>

    <div class="grid md:grid-cols-2 md:mx-20 md:mt-20 px-10 pb-1">
        <div class="md:w-9/12">
            <div class="font-semibold text-4xl  text-green-500">Ayo Bergabung Dengan IslamicXplore!
            </div>
            <div><img src="{{ asset('assets/login/business-img 1 (1).png') }}" alt=""></div>
        </div>
        <div class="md:w-9/12">
            <div class="text-3xl font-semibold text-green-500">Buat Akun IslamicXplore</div>
            <div class="font-semibold text-xl text-gray-500 my-5">Silahkan masukkan informasi akun anda</div>
            <div>
                <form action="{{ route('register.user') }}" class=" mx-auto" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" id="email" name="email"
                            class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="email@example.com" required />
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            password</label>
                        <input type="password" id="password" name="password"
                            class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            required />
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            required />
                    </div>
                    <div class="flex items-start mb-5 justify-between">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-green-300 rounded bg-green-50 focus:ring-3 focus:ring-green-300 dark:bg-green-700 dark:border-green-600 dark:focus:ring-green-600 dark:ring-offset-green-800 dark:focus:ring-offset-green-800"
                                required />
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Saya bersedia menerima informasi dari IslamicXplore</label>
                        </div>

                    </div>
                    <div class=" w-full">
                        <button type="submit"
                            class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Daftar
                        </button>
                    </div>

                    <div class="w-full my-1 flex ">
                        <a href=""
                            class="flex justify-center items-center text-green-500 border border-green-500 bg-white  focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <span class="pe-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1024px-Google_%22G%22_logo.svg.png"
                                    width="20px" alt="">
                            </span> Daftar Dengan Google
                        </a>
                    </div>
                    <div class="w-full my-1 flex ">
                        <a href=""
                            class="flex justify-center items-center text-green-500 border border-green-500 bg-white  focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <span class="pe-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/640px-Facebook_f_logo_%282019%29.svg.png"
                                    width="20px" alt="">
                            </span> Daftar Dengan Facebook
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
