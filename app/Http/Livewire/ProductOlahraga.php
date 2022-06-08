<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Olahraga;

class ProductOlahraga extends Component
{
    public $olahraga;
    public function mount($olahragaID) {
        $olahragaDetail = Olahraga::find($olahragaID);

        if($olahragaDetail) {
            $this->olahraga = $olahragaDetail;
        }
    }

    public function render()
    {
        $products = Product::where('olahraga_id', $this->olahraga->id)->paginate(8);
        return view('livewire.product-index', [
            'products' => $products,
            'title' => "Lapangan ".$this->olahraga->nama
        ]);
    }
}
