<?php

namespace App\Http\Livewire;

use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public $total_harga,$nohp,$alamat;

    public function mount(){
        if(!Auth::user()){
            return redirect()->route('login');
        }

        $this->nohp = Auth::user()->nohp;
        $this->alamat = Auth::user()->alamat;

        $pesanan = Pesanan::where('user_id',Auth::user()->id)->where('status', 0)->first();
        if(!empty($pesanan)){
            $this->total_harga = $pesanan->total_harga+$pesanan->kode_unik;
        }else{
            return redirect()->route('home');
        }
    }

    public function checkout(){
        $this->validate([
            'nohp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->nohp = $this->nohp;
        $user->alamat = $this->alamat;
        $user->update();

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        $this->emit('masukkanKeranjang');

        session()->flash('message', 'Pesanan berhasil dikirim');

        return redirect()->route('history');
    }


    public function render()
    {
        return view('livewire.checkout');
    }
}
