<?php

namespace App\Sorts;

use App\Models\Price;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Sorts\Sort;

class ProductPriceSort implements Sort
{
    public function __invoke(Builder $query, bool $descending, string $property): void
    {
        $direction = $descending ? 'DESC' : 'ASC';

        $query->orderBy(
            Price::select('price')
            ->whereColumn('prices.product_id', 'products.id')
            ->limit(1),
            $direction
        );
    }
}
