<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\ProductType;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class ProductEditType extends Component
{
    public $product;
    public $productTypes;
    public $producttype;
    public $user;

    public function mount($product)
    {
        $this->product = $product;
        $this->productTypes = ProductType::all();
        $this->user = Auth::user();
        $this->producttype = $product->product_type_id;
    }

    public function render()
    {
        return view('livewire.product-edit-type');
    }

    public function updateProducttype()
    {
        sleep(0.5);
        Product::where('id', $this->product->id)->update([
            'product_type_id' => (int) $this->producttype,
        ]);
        // session()->flash('role_updated', 'Role berhasil diubah!');
    }
}
