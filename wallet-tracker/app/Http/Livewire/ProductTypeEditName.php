<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\ProductType;

class ProductTypeEditName extends Component
{
    public $producttype, $name;

    protected $rules = [
        'name' => 'required|min:5|max:20',
    ];

    public function mount($producttype) {
        $this->producttype = $producttype;
        $this->name = $this->producttype->name;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.product-type-edit-name');
    }

    public function updateName($id) {
        $this->validate();
        
        ProductType::where('id', $id)->update([
            'name' => $this->name,
        ]);
    }
}
