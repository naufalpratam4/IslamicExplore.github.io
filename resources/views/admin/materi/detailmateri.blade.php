@extends('admin.layouts.main')
@section('content')
    <div>
        <div class="font-bold text-xl">Nama Materi : {{ $materi->nama_materi }}</div>
        <div class="font-semibold text-lg">Sub Materi</div>
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
        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Sub Materi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Video
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submateri as $item)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama_sub_materi }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ asset('storage/video/' . $item->video) }}
                                    <video class="w-96" controls>
                                        <source src="{{ asset('storage/video/' . $item->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </td>

                                <td class="px-6 py-4 flex gap-3">
                                    <div><a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{ route('admin.delete.submateri', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
        <div>
            <a href="{{ route('admin.addSubMateri', $materi->id) }}">
                <button class="px-4 py-2 bg-green-500 rounded-lg text-white">Tambah Sub Materi</button>
            </a>
        </div>

    </div>
@endsection
