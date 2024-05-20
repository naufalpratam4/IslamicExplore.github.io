<div class="bg-green-100 pt-8" style="height: 65vh">
    <div class="grid md:grid-cols-3 gap-4 md:mx-20  " style="height: 400px">
        <div class="col-span-2  bg-white rounded-lg md:p-5">
            <div class="text-center md:pt-24">
                <h2 class="text-green-500 text-2xl font-semibold">Yuk Berlangganan Untuk Akses Materinya!</h2>
                <p class="text-gray-700 py-2">Berlangganan sekarang juga untuk mulai Pilih Skill apapun dan pelajari
                    kapanpun.
                    Dapatkan video
                    materi terstruktur modul praktik plus webinar series rancangan para experts dari top companies</p>
                <button class="px-4 py-2 bg-green-500 text-white rounded-xl mt-2 hover:bg-green-600">Berlangganan
                    Sekarang!</button>
                <p class="text-red-500 mt-3">10.000+ Orang Berlangganan Tiap Bulan</p>
            </div>

        </div>
        <div class="bg-white rounded-lg p-3 ps-8">
            <div class="text-xl font-semibold text-gray-700">materi</div>
            <div class="pt-4 ">
                <ul class=" ">
                    @foreach ($submateri as $no => $item)
                        <li class="flex justify-between pb-1">
                            <div class="flex">
                                <div>
                                    <img src="{{ asset('assets/coursemateri/material-symbols_slow-motion-video.png') }}"
                                        alt="">
                                </div>

                                <a
                                    href="{{ route('course.sub.detail', ['materi_id' => $materi->id, 'id' => $item->id]) }}">
                                    <span class="text-xl ps-3"> {{ $no + 1 }}. {{ $item->nama_sub_materi }}</span>
                                </a>
                            </div>
                            <div class="md:pe-3">
                                <img src="{{ asset('assets/coursemateri/charm_square-tick.png') }}" alt="">
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>
