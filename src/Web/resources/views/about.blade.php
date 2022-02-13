@extends('layouts.main')

@section('container')

<div class="w-full md:h-[455px] h-[330px] bg-white bg-hero z-0 flex justify-center items-center">
    <div>
        <div class="text-blue-700 md:text-5xl text-3xl font-bold">
            About Us
        </div>
    </div>
</div>

<div class="w-full bg-white py-16">
    <div class="md:flex md:justify-center h-full md:items-center md:w-full w-5/6 mx-auto">
        <div class="flex justify-center md:block">
            <img src="/images/about.png" alt="" class="md:w-full w-[300px]">
        </div>
        <div class="md:pl-5 md:pt-0 pt-5">
            <div class="text-blue-700 font-bold md:text-4xl text-2xl text-center md:text-left">
                MISSION: We work to <br>
                prevent substance <br>
                misuse.
            </div>
            <div class="pt-3 text-center md:text-left md:text-base text-[10px]">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br>
                sed diam nonumy eirmod tempor invidunt ut labore et dolore <br>
                magna aliquyam erat, sed diam voluptua. At vero eos et accusam <br>
                et justo duo dolores et ea rebum. Accusantium aperiam <br>
                earum ipsa eius.
            </div>
            {{-- <div class="pt-10">
                @component('components.button')
                Learn more
                @endcomponent
            </div> --}}
        </div>
    </div>
</div>

{{-- kumpulan menu --}}
<div class="w-full py-16 bg-gray-50 flex justify-center items-center">
    <div>
        <div class="flex flex-wrap md:w-[1050px] justify-around w-5/6 mx-auto">
            <div class="md:pt-10 pt-5">
                @component('components.profile')
                <img src="/images/frans.png" alt="" class="rounded-t-md">
                <div class="flex items-center justify-center md:h-[185px] h-[150px]">
                    <div>
                        <div class="text-center font-semibold text-blue-700 md:text-2xl text-lg">
                            Fran’s Wahyu
                        </div>
                        <div class="text-center pt-3 md:text-base text-xs">
                            Director of Programs, <br>
                            Engagement, <br>
                            and Customer Success <br>
                        </div>
                    </div>
                </div>
                @endcomponent
            </div>

            <div class="md:pt-10 pt-5">
                @component('components.profile')
                <img src="/images/hrida.png" alt="" class="rounded-t-md">
                <div class="flex items-center justify-center md:h-[185px] h-[150px]">
                    <div>
                        <div class="text-center font-semibold text-blue-700 md:text-2xl text-lg">
                            Hrida
                        </div>
                        <div class="text-center pt-3 md:text-base text-xs">
                            Director of Programs, <br>
                            Engagement, <br>
                            and Customer Success <br>
                        </div>
                    </div>
                </div>
                @endcomponent
            </div>

            <div class="md:pt-10 pt-5">
                @component('components.profile')
                <img src="/images/audrey.png" alt="" class="rounded-t-md">
                <div class="flex items-center justify-center md:h-[185px] h-[150px]">
                    <div>
                        <div class="text-center font-semibold text-blue-700 md:text-2xl text-lg">
                            Audrey
                        </div>
                        <div class="text-center pt-3 md:text-base text-xs">
                            Director of Programs, <br>
                            Engagement, <br>
                            and Customer Success <br>
                        </div>
                    </div>
                </div>
                @endcomponent
            </div>

            <div class="md:pt-10 pt-5">
                @component('components.profile')
                <img src="/images/krisna.png" alt="" class="rounded-t-md">
                <div class="flex items-center justify-center md:h-[185px] h-[150px]">
                    <div>
                        <div class="text-center font-semibold text-blue-700 md:text-2xl text-lg">
                            Krisna
                        </div>
                        <div class="text-center pt-3 md:text-base text-xs">
                            Director of Programs, <br>
                            Engagement, <br>
                            and Customer Success <br>
                        </div>
                    </div>
                </div>
                @endcomponent
            </div>

            <div class="md:pt-10 pt-5">
                @component('components.profile')
                <img src="/images/wikan.png" alt="" class="rounded-t-md">
                <div class="flex items-center justify-center md:h-[185px] h-[150px]">
                    <div>
                        <div class="text-center font-semibold text-blue-700 md:text-2xl text-lg">
                            Wikan
                        </div>
                        <div class="text-center pt-3 md:text-base text-xs">
                            Director of Programs, <br>
                            Engagement, <br>
                            and Customer Success <br>
                        </div>
                    </div>
                </div>
                @endcomponent
            </div>

        </div>
    </div>
</div>


@endsection
