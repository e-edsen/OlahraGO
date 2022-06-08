<div class="container mx-auto flex flex-col items-start justify-start">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3 mt-1/12">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{ route('keranjang') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Keranjang</a>
                </div>
            </li>

            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Check Out</span>
                </div>
            </li>
        </ol>
    </nav>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="w-full items-center mt-5 flex justify-center mb-5">
        <div class="flex flex-row my-1/12 items-center justify-center">
            <div class="font-sans mt-2 mx-5 max-w-xl">
                <h1 class="text-xl font-bold">Informasi Pembayaran
                </h1>
                <h2 class="text-sm mt-2">
                Silahkan melakukan pembayaran ke rekening
                </h2>
                <h2 class="text-sm mt-2">
                dibawah ini sebesar : <strong>Rp. {{number_format($total_harga)}}</strong>
                </h2>
                <div class="flex row my-2 items-center">
                    <img src="{{ url('/assets/icons/bca.jpg') }}" alt="bca" class="w-1/4 mx-2">
                    <div class="">
                        <h3 class="text-sm font-bold mt-2">
                            Bank BCA
                        </h3>
                        <h3 class="text-sm my-2">
                            No. Rekening : 123456789
                        </h3>
                        <h3 class="text-sm">
                            a/n Muhammad Ilman Naafian
                        </h3>
                    </div>
                </div>
            </div>
            <div class="font-sans">
                <h1 class="text-xl font-bold mb-5">Informasi Pemesan
                </h1>
                <form wire:submit.prevent="checkout">
                    <label for="" class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">
                    No. HP
                    </label>
                    <input id="nohp" type="text" class="form-input w-full @error('nohp') border-red-500 @enderror" wire:model="nohp" value="{{ old('nohp') }}" required autocomplete="name" autofocus>

                    @error('nohp')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror


                    <label for="" class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4 mt-2">
                    Alamat
                    </label>
                    <textarea class="form-input w-full @error('alamat') border-red-500 @enderror" wire:model="alamat"></textarea>

                    @error('alamat')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                    <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 my-5">
                        Checkout
                    </button>
                    </form>
                </div>
            </div>
        </div>
</div>
