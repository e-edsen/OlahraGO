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

            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Keranjang</span>
                </div>
            </li>
        </ol>
    </nav>



    <div class="w-full items-center mt-5 flex justify-center mb-5">
        <div class="w-1/2 flex flex-col items-center justify-center relative overflow-x-auto shadow-md sm:rounded-lg">
            @if(session()->has('message'))
            <div class="w-full p-4 mb-4 text-sm text-red-700 bg-red-200 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <span class="font-medium">{{ session('message') }}</span>
            </div>
            @endif
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Lapangan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Waktu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1?>
                    @forelse ($pesanan_details as $pesanan_detail)
                    <tr class="bg-white border-b my-2 dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                        {{ $no++ }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap my-2">
                        {{ $pesanan_detail->product->nama }}
                        </th>
                        <td class="px-6 py-4">
                        {{ $pesanan_detail->jumlah_pesanan }} Jam
                        </td>
                        <td class="px-6 py-4">
                        Rp. {{number_format($pesanan_detail->total_harga)}}
                        </td>
                        <td class="px-6 py-4 text-red-600">
                            <button wire:click='destroy({{ $pesanan_detail->id }})'>
                                Delete
                            </button>
                        </td>
                    </tr>

                    @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4" colspan="5">
                            <div class="text-center text-gray-500">
                                <p class="text-xl my-7">
                                    Keranjang kosong
                                </p>
                            </div>
                        </td>
                    </tr>
                    @endforelse

                    @if(!empty($pesanan))
                    <tr class="bg-white border-b mt-3">
                        <td class="px-6 py-4" colspan="5">
                            <div class="text-right text-gray-800 font-bold">
                                <p class="">
                                    Total Harga : Rp. {{number_format($pesanan->total_harga)}}
                                </p>
                                <p class="my-5">
                                    Kode Unik : Rp. {{number_format($pesanan->kode_unik)}}
                                </p>
                                <p class="">
                                    Total Pembayaran : Rp. {{number_format($pesanan->kode_unik+$pesanan->total_harga)}}
                                </p>
                                <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 my-5">
                                    <a href="{{route('checkout')}}">Checkout</a>
                                </button>
                            </div>
                        </td>
                    </tr>

                    @endif
                </tbody>
            </table>
        </div>
    </div>

</div>
