<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Transformer\ProductTransformer;
use App\Http\Controllers\Api\ApiController;
use EllipseSynergie\ApiResponse\Laravel\Response;

class ProductController extends ApiController
{
    public function __constructor(Response $response) {
        parent::__constructor($response);
    }
    /**
     * @OA\Get(
     *     path="/products",
     *     operationId="ApiProductIndex",
     *     tags={"Product"},
     *     summary="Get products list",
     *     @OA\Response(
     *         response="200",
     *         description="List of products"
     *     ),
     *     @OA\Parameter(
     *           ref="#/components/parameters/limit",
     *     ),
     *     @OA\Parameter(
     *          ref="#/components/parameters/page",
     *     ),
     *     @OA\Parameter(
     *          ref="#/components/parameters/include",
     *     )
     * )
     * 
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query();
        if (is_array(request()->get('categories'))){
            $categories = request()->get('categories');
            $products->whereHas('categories', function($query) use ($categories){
                $query->whereIn('id', $categories)->get();
            });
        }
        if(is_array(request()->get('vendor_id'))){
            $vendor_id = request()->get('vendor_id');
            $products->whereIn('vendor_id',$vendor_id)->get();
        }
        $products = $products->get();
        return $this->response->get(['products' => [$products, new ProductTransformer]]);
    }

    /** 
     * @OA\Get(
     *     path="/products/{id}",
     *     operationId="ApiProductShow",
     *     tags={"Product"},
     *     summary="Get product by id",
     *     @OA\Response(
     *         response="200",
     *         description="Product"
     *     ),
     *     @OA\Parameter(
     *          ref="#/components/parameters/id",
     *     ),     
     *     @OA\Parameter(
     *          ref="#/components/parameters/include",
     *     )
     * )
     * 
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $this->response->get(['product' => [$product, new ProductTransformer]]);
    }

}
