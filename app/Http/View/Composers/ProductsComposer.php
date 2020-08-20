<?php

namespace App\Http\View\Composers;

use App\Product;
use Illuminate\View\View;

class ProductsComposer
{
    public function compose(View $view)
    {
        $view->with('products', Product::all()->sortBy('productNumber')->pluck('full_name', 'id'));
    }
}
