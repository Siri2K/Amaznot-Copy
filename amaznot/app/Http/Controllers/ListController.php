<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ListController extends Controller
{
    public function index()
    {
        try 
        {
            $product = Product::
                select('id', 'name', 'category', 'subcategory', 'price', 'about', 'details', 'weight', 'image')
                ->where('id', 1)
                ->firstOrFail();
        }
        catch (QueryException $ex)
        {
            return abort(404);
        }

        return view('pages.productlist', [
            "product" => $product
        ]);
    }
}
