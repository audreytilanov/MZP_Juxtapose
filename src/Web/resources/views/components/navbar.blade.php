<div class="absolute z-10 w-full">
    <div
        class="flex justify-between container py-5 items-center mx-auto 2xl:container 2xl:mx-auto xl:container xl:mx-auto lg:container lg:mx-auto md:container md:mx-auto w-5/6">
        <div class="font-bold text-green-700 md:text-2xl text-xl">
            <a href="/">BASAMA</a>
        </div>
        <div class="md:block hidden">
            <ul class="list-none text-blue-700">
                {{-- <li class="inline-block mr-5"><a href="{{ route('tentang.basama') }}">Tentang</a></li>
                <li class="inline-block mr-5"><a href="/">Cara Investasi</a></li> --}}
                <li class="inline-block mr-5"><a href="{{ route('login') }}" class="btn btn-success">Login</a></li>
                @if (Auth::check())

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit"><i class="nav-icon fas fa-sign-out-alt"></i> Logout</a>
                </form>
                @endif
            @if (Auth::check())
                @if (Auth::user()->name == null)
                    <li class="inline-block mr-5"><a href="{{ route('login') }}" class="btn btn-success">Login</a></li>
                @else
                    <li class="inline-block mr-5">{{ Auth::user()->name }}</li>
                @endif
            @endif
                
                
            </ul>
            <img src="" alt="">
        </div>
        <div class="md:hidden">
            <img src="/images/menu.svg" alt= "" id="humburger" class="cursor-pointer">
        </div>
    </div>
    <div class="fixed bg-white z-10 right-0 top-0 w-full md:hidden transition-transform" id="humburger_menu">
        <div class="flex justify-center items-start p-5 w-full">
            <ul class="list-none text-blue-700 text-center">
                <li class="inline-block mr-5"><a href="{{ route('tentang.basama') }}">Tentang</a></li>
                <li class="inline-block mr-5"><a href="/">Cara Investasi</a></li>
                @if (Auth::check())
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <li class="inline-block mr-5"><a class="btn btn-success" type="submit">Logout</a></li>
                </form>
                @endif
                @if (Auth::check())
                @if (Auth::user()->name == null)
                    <li class="inline-block mr-5"><a href="{{ route('login') }}" class="btn btn-success">Login</a></li>
                @else
                    <li class="inline-block mr-5">{{ Auth::user()->name }}</li>
                @endif
            @endif
            </ul>
        </div>
        <img src="/images/close.svg" alt="" class="cursor-pointer absolute top-3 right-3" id="close_humburger">
    </div>

</div>

<script>
    const close_humberger = document.getElementById('close_humburger');
    const humberger = document.getElementById('humburger');
    const humberger_menu = document.getElementById('humburger_menu');

    humberger_menu.style.display = 'none';

    humberger.addEventListener('click', function () {
        humberger_menu.style.display = 'block';
    });

    close_humberger.addEventListener('click', function () {
        humberger_menu.style.display = 'none';
    });

    humberger_menu.addEventListener('click', function () {
        humberger_menu.style.display = 'none';
    });


</script>
