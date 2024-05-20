@extends('admin.layouts.main')

@section('content')
    <div>
        <div class="flex justify-between mb-4">
            <div class="font-bold text-3xl">Daftar Materi</div>
            <a href="/admin/materi/tambah-materi"> <button
                    class="px-4 py-2 bg-green-500 text-white rounded-xl hover:bg-green-800">Tambah Materi</button></a>

        </div>
        @if (session('success'))
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Success</span> {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="grid grid-cols-3 gap-4">
            @foreach ($materi as $item)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('storage/foto_materi/' . $item->foto_materi) }}" alt="">
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $item->nama_materi }}
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $item->deskripsi }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Harga : {{ $item->harga }}</p>
                        <div class="flex justify-between">
                            <a href="{{ route('admin.detailMateri', $item->id) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                            <form action="{{ route('admin.delete.materi', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
                                    delete
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>


    </div>
@endsection
