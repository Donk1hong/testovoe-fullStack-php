<div
    class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-4 w-100 px-3 gap-3">
    <span class="text-muted small">Найдено товаров: {{ $products->total() }}</span>

    <div class="sorting-links d-flex flex-wrap gap-2 align-items-center">
        <span class="text-secondary small me-1">Сортировка:</span>
        <a href="{{ request()->fullUrlWithQuery(['sort' => 'price']) }}"
           class="btn btn-sm btn-outline-secondary py-1 px-2 text-decoration-none small">Сначала
            дешевые</a>
        <a href="{{ request()->fullUrlWithQuery(['sort' => '-price']) }}"
           class="btn btn-sm btn-outline-secondary py-1 px-2 text-decoration-none small">Сначала
            дорогие</a>
        <a href="{{ request()->fullUrlWithQuery(['sort' => 'name']) }}"
           class="btn btn-sm btn-outline-secondary py-1 px-2 text-decoration-none small">А-Я</a>
        <a href="{{ request()->fullUrlWithQuery(['sort' => '-name']) }}"
           class="btn btn-sm btn-outline-secondary py-1 px-2 text-decoration-none small">Я-А</a>
    </div>
</div>
