<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\addProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    private ProductService $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function store(addProductRequest $request)
    {
        return $this->service->createProduct($request);
    }

    public function update(Request $request, $id)
    {
        return $this->service->updateProduct($request, $id);
    }

    public function show(Product $product)
    {
        return $this->service->getProduct($product);
    }

    public function index(Request $request)
    {
        return $this->service->productLists($request);
    }

    public function destroy(Product $product)
    {
        return $this->service->deleteProduct($product);
    }
}
