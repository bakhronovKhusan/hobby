<?php

namespace App\Services;

use App\Http\Requests\addProductRequest;
use App\Jobs\SendProductCreatedNotificationJob;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductService
{
    public function createProduct(addProductRequest $request){
        if(!auth('api')->user()->can('create products')){
            return response()->json(['message' => 'Permission denied!'], 301);
        }
        if($product = Product::firstOrCreate($request->all())){
            SendProductCreatedNotificationJob::dispatch($product);
            return response()->json(['message' => 'Product created'], 201);
        }
        return response()->json(['message' => 'Error adding product'], 301);
    }

    public function updateProduct(Request $request, $id){
        if(!auth('api')->user()->can('edit products')){
            return response()->json(['message' => 'Permission denied!'], 301);
        }
        $product = Product::findOrFail($id);
        $requestData = $request->all();
        if(!auth('api')->user()->can('edit articles')){
            $requestData = Arr::except($request->all(), ['article']);
        }
        $product->update($requestData);
        return response()->json($product, 200);
    }

     public function getProduct(Product $product){
         if (!$product) {
             return response()->json(['message' => 'Article not found'], 201);
         }
         return response()->json($product, 200);
     }

    public function deleteProduct(Product $product){
        if(!auth('api')->user()->can('delete products')){
            return response()->json(['message' => 'Permission denied!'], 301);
        }
        if($product->delete()){
            return response()->json('Delete successfully!', 204);
        }
    }

    public function productLists(Request $request){
        $perPage = $request->query('per_page', 10);
        $products = Product::available()->paginate($perPage);
        return response()->json($products, 200);
    }
}
