<div>
    <!-- Banner -->
    <div class="flex justify-center bg-orange-200">
        <div class="flex flex-col justify-center items-center w-1/3 mx-24">
            <h1 class="flex justify-start items-center font-medium text-4xl text-left">Mulai pesan lapangan dari rumah dengan mudah.</h1>
            <a href="/products" class="flex justify-start items-start bg-orange-400 hover:bg-orange-500 mt-1/12 text-white font-medium py-4 px-8 rounded-full">Mulai Telusuri</a>
        </div>

        <img src="{{ url('assets/images/LandpageIMGFirst.png') }}" alt="Logo" class="rounded-full my-12 mx-24 h-80" >
    </div>

    <!-- Content -->
    <div class="flex flex-col items-center justify-center">
        <div class="mt-16">
            <h1 class="text-5xl font-bold">Our Services</h1>
        </div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-row items-center justify-center">
                @foreach($olahragas as $olahraga)
                <div class="flex flex-col items-center">
                    <a href="{{ route('products.olahraga', $olahraga->id) }}" class="text-center">
                        <img src="{{ url('assets/images') }}/{{ $olahraga->gambar }}" alt="Logo" class="rounded-lg mx-24 h-80 mt-1/12" >
                        <h1 class="text-2xl font-medium justify-center items-center">{{ $olahraga['nama'] }}</h1>
                     </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Why Us -->
    <div class="flex flex-col items-center justify-center w-full h-9/12 bg-orange-200 mt-10">
        <div class="my-10">
            <h2 class="text-center text-2xl font-bold mb-10 mt-5">Kenapa menggunakan layanan kami ?</h2>
            <p class="text-lg text-center font-light">Kami menyediakan pemesanan lapangan olahraga secara online<br>untuk mempermudah pengguna dalam efisiensi waktu.</p>
        </div>
    </div>
    <!-- Keuntungan -->
    <div class="flex flex-row text-center items-center justify-center w-full h-11/12 mt-10">
        <div class="flex w-3/4">
            <div class="flex flex-col justify-center items-center my-10">
                <img src="{{ url('assets/icons/icon1.png') }}" alt="Logo" class="rounded-lg" >
                <h1 class="text-2xl justify-center items-center w-7/12 my-6 font-bold">Trusted</h1>
                <p class="font-sans font-medium w-3/4 text-center">OlahraGO mempunyai pelayanan yang terpercaya mulai dari pemesanan tepat waktu sampai metode pembayaran yang aman.</p>
            </div>

            <div class="flex flex-col justify-center items-center my-10 drop-shadow-2xl shadow-xl">
                    <img src="{{ url('assets/icons/icon2.png') }}" alt="Logo" class="rounded-lg mt-8" >
                    <h1 class="text-2xl justify-center items-center w-7/12 my-6 font-bold">Easy to Use</h1>
                    <p class="font-sans font-medium w-3/4 text-center mb-8">OlahraGO merupakan layanan pemesanan lapangan secara online dengan tampilan yang user friendly dan mudah digunakan oleh semua kalangan umur.</p>
            </div>

            <div class="flex flex-col justify-center items-center my-10">
                <img src="{{ url('assets/icons/icon3.png') }}" alt="Logo" class="rounded-lg" >
                <h1 class="text-2xl justify-center items-center w-7/12 my-6 font-bold">Variety</h1>
                <p class="font-sans font-medium w-3/4 text-center">OlahraGO memberikan pelayanan yang beragam, mulai dari pemberian daftar lapangan sampai metode pembayaran yang beragam juga.</p>
            </div>
        </div>
    </div>

    <!-- Why Us -->
    <div class="flex flex-row items-center justify-center w-full h-1/2 bg-orange-200 mt-10">
        <div class="my-10 mx-1/12">
            <p class="text-2xl text-start  font-bold my-2">Cari kategori lapangan untuk</a>
            <p class="text-2xl text-center font-bold">
            menunjang kesehatan tubuh anda.
            </a>
        </div>
        <div class="flex justify-center items-center mx-1/12">
            <a href="/products" class="flex justify-start items-start bg-orange-400 hover:bg-orange-500 mt-1/12 text-white font-medium py-4 px-8 rounded-full">Mulai Sekarang</a>
        </div>
    </div>


</div>
