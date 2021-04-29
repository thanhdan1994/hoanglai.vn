<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class ProductItem extends Component
{
    public $product;
    /**
     * Create a new component instance.
     *
     * @param Product $product
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-item');
    }
}
