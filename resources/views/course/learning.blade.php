<div class="container mx-auto md:min-h-screen  justify-center">
    <div class="font-semibold text-2xl" style="color: #0FA958">Daftar Learning path</div>
    <div class="grid md:grid-cols-3 gap-3 mt-3">
        @foreach ($materi as $item)
            <div
                class="w-full mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg mx-auto pt-5"
                        src="{{ asset('storage/foto_materi/' . $item->foto_materi) }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5
                            class="text-2xl pt-5 font-semibold tracking-tight text-gray-900 dark:text-white text-center ">
                            {{ $item->nama_materi }}</h5>
                    </a>
                    <div class="flex mt-2.5 mb-1">
                        <div class="ms-5 flex items-center space-x-1 rtl:space-x-reverse">
                            <img src="{{ asset('assets/course/Vector-2.png') }}" alt="">
                        </div>
                        <div class="">5,678</div>
                    </div>
                    <div class="flex items-center mt-2.5 mb-1">
                        <div class="ms-5 flex items-center space-x-1 rtl:space-x-reverse">
                            <img src="{{ asset('assets/course/Vector-1.png') }}" alt="">
                        </div>
                        <div class="">5,678</div>
                    </div>
                    <div class="flex items-center mt-2.5 mb-1">
                        <div class="ms-5 flex items-center space-x-1 rtl:space-x-reverse">
                            <img src="{{ asset('assets/course/Vector.png') }}" alt="">
                        </div>
                        <span class="">5,678</span>
                    </div>
                    <div class="flex justify-center">
                        <a href="{{ route('course.detail', $item->id) }}">
                            <button class="px-10 py-3 rounded-full text-white font-semibold"
                                style="background: #151948">
                                Rp. 59.900</button>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach



    </div>
</div>
