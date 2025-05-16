<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(private Product $model) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $products = $this->model::all()->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description,
                    'address_store' => $product->address_store,
                    'image_url' => $product->image,
                ];
            });;


            return view('presentes', [
                'products' => $products->toArray(),
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function selectProduct(Request $request)
    {
        $productId = $request->input('product_id');
        dd($productId);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
