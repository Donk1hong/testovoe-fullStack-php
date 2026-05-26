<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Product;
use App\Sorts\ProductPriceSort;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedSort;
// Библиотека для сортировки, мне так удобнее.
use Spatie\QueryBuilder\QueryBuilder;
class GroupController
{
    public function index(Request $request)
    {
        $categoriesQuery = Group::query()
            ->where('parent_id', 0)
            ->with('recursiveChildren')
            ->get();

        $productsAll = QueryBuilder::for(Product::class)
            ->with('price')
            ->allowedSorts('name', AllowedSort::custom('price', new ProductPriceSort()))
            ->defaultSort('-name')
            ->paginate(6)
            ->withQueryString();

        return view('index' , [
            'categories' => $categoriesQuery,
            'products' => $productsAll,
        ]);
    }

    public function category($id)
    {
        $categoriesQuery = Group::query()
            ->where('parent_id', 0)
            ->with('recursiveChildren')
            ->get();

        $group = Group::query()->findOrFail($id);

        $categoriesAllSub = $group->getAllGroupIds();

        $productsQuery = QueryBuilder::for(Product::class)
            ->whereIn('group_id', $categoriesAllSub)
            ->with('price')
            ->allowedSorts('name', AllowedSort::custom('price', new ProductPriceSort()))
            ->defaultSort('-name')
            ->paginate(6)
            ->withQueryString();

        return view('index', [
                'categories' => $categoriesQuery,
                'products' => $productsQuery,
            ]);
    }

    public function product($id)
    {
        $product = Product::query()->findOrFail($id);

        return view('show-product', [
            'product' => $product
        ]);
    }
}
