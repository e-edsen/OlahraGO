<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use DB;

class ProductDetail extends Component
{
    public $product, $jumlah_pesanan;

    public function mount($id)
    {
        $productDetail = Product::find($id);

        if ($productDetail) {
            $this->product = $productDetail;
        }
    }

    public function masukkanKeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required|numeric|min:1'
        ]);

        //validate login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        //total harga
        $total_harga = $this->product->harga * $this->jumlah_pesanan;

        //check user status
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        //check empty pesanan
        if (empty($pesanan)) {
            Pesanan::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100, 999),
            ]);
            // dd(Auth::user()->id, $total_harga, 0, mt_rand(100, 999));

            $pesanan = Pesanan::where('user_id', auth()->user()->id)->where('status', 0)->first();
            $pesanan->kode_pemesanan = 'PESANAN-' . $pesanan->id . '-' . $pesanan->kode_unik;
            $pesanan->save();
        } else {
            $pesanan->total_harga += $total_harga;
            $pesanan->update();
        }

        // pesanan detail
        PesananDetail::create([
            'pesanan_id' => $pesanan->id,
            'product_id' => $this->product->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'total_harga' => $total_harga,
        ]);

        $this->emit('masukkanKeranjang');

        session()->flash('message', 'Produk berhasil ditambahkan ke keranjang');

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
