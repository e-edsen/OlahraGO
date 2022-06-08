<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <header class="bg-gray-100 py-6">
        <div class="container mx-auto flex flex-row justify-between items-center px-6">
            <div class="flex flex-row justify-center items-center">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-700 no-underline">
                    <img src="{{ url('assets/images/OlahraGO.png') }}" alt="Logo" class="h-8">
                </a>
                <!-- <div class="mx-10 justif-center align-center">
                    @foreach($olahragas as $olahraga)
                    <a href=" {{url('/login')}}" class="text-lg text-gray-700 no-underline mx-5">{{ $olahraga->nama }}</a>
                    @endforeach
                </div> -->
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mx-10" type="button">Pilih Olahraga<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(583px, 681px);" data-popper-placement="bottom">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        @foreach ($olahragas as $olahraga)
                        <li>
                        <a href="{{ route('products.olahraga', $olahraga->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $olahraga->nama }}</a>
                        </li>
                        @endforeach
                        <li>
                        <a href="/products" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Semua Olahraga</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div>

            </div>
            <nav class="space-x-5 text-gray-700 text-sm sm:text-base">
                @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <a href="{{ route('profile') }}">{{ Auth::user()->name }}</a>

                    <a href="{{ route('history') }}">History</a>
                    <a href="{{ route('keranjang') }}">Keranjang({{$jumlah_pesanan}})</a>
                    <a href="{{ route('logout') }}"
                        class="no-underline hover:underline"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </nav>
        </div>
    </header>
</div>
