<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public string $query = '';

    protected $updatesQueryString = ['query'];

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::query()
            ->where('name', 'like', "%{$this->query}%")
            ->orderBy('name')
            ->paginate(10);

        return view('livewire.product-search', compact('products'));
    }
}
