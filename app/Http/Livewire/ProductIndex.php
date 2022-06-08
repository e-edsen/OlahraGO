<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductIndex extends Component
{

    public function render()
    {
        $products = Product::inRandomOrder()->paginate(8);
        return view('livewire.product-index', [
            'products' => $products,
            'title' => "Lapangan Olahraga"
        ]);
    }
}
