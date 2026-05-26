<div class="card h-100 border rounded d-flex flex-column justify-content-between p-3">
    <div class="mb-3">
        <a href="{{ route('catalog.product', $product->id) }}" class="text-decoration-none text-secondary fw-semibold link-secondary">
            {{ $product->name }}
        </a>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-auto pt-2 border-top">
        <span class="text-success fw-bold">{{ $product->price->price }} руб.</span>
    </div>
</div>
