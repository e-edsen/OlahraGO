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
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">History</span>
                </div>
            </li>
        </ol>
    </nav>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="w-full items-center mt-5 flex justify-center mb-5">
        <div class="flex flex-col mt-5 items-center justify-center">
            @if(session()->has('message'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-200 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class="font-medium">{{ session()->get('message')}}</span>
            </div>
            @endif
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Pesan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Pemesanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pesanan (ID Lapangan)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Harga
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1?>
                    @forelse ($pesanans as $pesanan)
                    <tr class="bg-white border-b my-2 dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                        {{ $no++ }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap my-2">
                        {{ $pesanan->created_at->format('d-m-Y') }}
                        </th>
                        <td class="px-6 py-4">
                        {{ $pesanan->kode_pemesanan }}
                        </td>
                        <td class="px-6 py-4 flex flex-col text-center">
                            <?php $pesanan_details = \App\Models\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                            @foreach ($pesanan_details as $pesanan_detail)

                            <a href="{{ route('products.detail', $pesanan_detail->product_id) }}">
                                {{ $pesanan_detail->product_id }}
                            </a>
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                        @if($pesanan->status == 1)
                        Belum Lunas
                        @else
                        Lunas
                        @endif
                        </td>
                        <td class="px-6 py-4">
                        Rp. {{number_format($pesanan->total_harga)}}
                        </td>
                    </tr>
                </div>

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
            </table>
            <div class="font-sans mt-2 mx-5 max-w-xl">
                <h2 class="text-sm mt-5">
                Silahkan melakukan pembayaran ke rekening
                </h2>
                <h2 class="text-sm mt-2">
                dibawah ini :
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
        </div>
    </div>
</div>
