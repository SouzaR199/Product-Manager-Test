<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductObserver
{
    public function created(Product $product): void
    {
        Log::info('Produto criado via Observer', ['id' => $product->id, 'name' => $product->name]);
    }

    public function updated(Product $product): void
    {
        Log::info('Produto atualizado via Observer', ['id' => $product->id]);
    }

    public function deleted(Product $product): void
    {
        Log::info('Produto deletado via Observer', ['id' => $product->id]);
    }
}
