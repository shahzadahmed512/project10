<?php

namespace App\Http\Controllers\API;
       
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Product;
use Validator;
//use App\Http\Resources\ProductResource;
//use Illuminate\Http\JsonResponse;

class ProductDetailsController extends BaseController
{
    public function ProductDetails(Request $request){

        $id = $request->id;

        $productDetails = Product::where('product_id',$id)->get();
        $productList = Product::where('id',$id)->get();

         $item = [
                'productDetails' => $productDetails,
                'productList' => $productList,                 
            ];

            return $item;

    } // End Method 



}
 