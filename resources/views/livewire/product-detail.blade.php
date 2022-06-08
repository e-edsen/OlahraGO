<div class="container mx-auto flex flex-col items-start justify-start">
    {{-- Because she competes with no one, no one can compete with her. --}}

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
                    <a href="{{ route('products') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Products</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{ route('products') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Lapangan Olahraga</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $product->nama }}</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="flex items-center justify-center w-full h-full mb-5">
        <div class="flex flex-row max-w-lg w-full mt-16 justify-center items-center bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="w-full rounded-t-lg" src="/assets/images/{{ $product->gambar }}" alt="product image" />
            <div class="w-full mr-4 flex flex-col justify-center text-left">
                <h5 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product-> nama }}</h5>
                @if($product->is_ready == 1)
                <span class="mt-2 text-left text-green-600 text-sm font-semibold5 rounded dark:bg-green-200 dark:text-green-900">Ready</span>
                @else
                <span class="mt-2 text-left text-red-600 text-sm font-semibold rounded dark:bg-red-200 dark:text-red-900">Tidak Ready</span>
                @endif
                <span class="text-sm font-light mt-2 text-left text-gray-900 dark:text-white">Rp. {{ number_format($product->harga) }}/jam</span>

                <!-- Produk -->
                <form wire:submit.prevent="masukkanKeranjang">
                    <div class="flex flex-col flex-wrap mt-5">
                        @if(session()->has('message'))
                        <div class="p-4 mb-4 text-sm text-green-700 bg-green-200 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                        <span class="font-medium">{{ session()->get('message')}}</span>
                        </div>
                        @endif
                        <label for="jumlah_pesanan" class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Jumlah Jam') }}:
                        </label>
                        <input id="jumlah_pesanan" type="number" class="form-input w-full @error('email') border-red-500 @enderror" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="name" autofocus>

                        @error('jumlah_pesanan')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>


                    <div class="flex flex-col justify-center mt-5 mb-5">
                        <button type="submit" class="mt-5 w-full text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>