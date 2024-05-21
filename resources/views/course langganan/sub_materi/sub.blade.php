<div class="bg-green-100 pt-8" style="height: 65vh">
    <div class="grid md:grid-cols-3 gap-4 md:mx-20  " style="height: 400px">
        <div class="col-span-2 bg-white rounded-lg md:p-5 flex justify-center">
            <div class="w-10/12">
                <video controls class="mx-auto rounded-lg">
                    <source src="{{ asset('storage/video/' . $videoSubMateri->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <div class="bg-white rounded-lg p-3 ps-8">
            <div class="text-xl font-semibold text-gray-700">materi</div>
            <div class="pt-4 ">
                <ul class=" ">
                    @foreach ($listSubMateri as $no => $item)
                        <li class="flex justify-between pb-1">
                            <div class="flex">
                                <div>
                                    <img src="{{ asset('assets/coursemateri/material-symbols_slow-motion-video.png') }}"
                                        alt="">
                                </div>

                                <a href="">
                                    <span class="text-xl ps-3">
                                        <a
                                            href="{{ route('course.sub.detail', ['materi_id' => $materi->id, 'id' => $item->id]) }}">
                                            <span class="text-xl ps-3"> {{ $no + 1 }}.
                                                {{ $item->nama_sub_materi }}</span>
                                        </a>
                                    </span>
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
