@extends('layouts.app')

@section('product')
    <div class="d-flex flex-column ms-4 w-50">
        <a href="{{ url()->previous() }}" class="text-decoration-none text-muted small d-inline-flex align-items-center mb-3 link-dark">
            <span class="me-1">&larr;</span>
            Назад в каталог
        </a>
        <div class="p-4 bg-white rounded-3 border">
            <span class="text-uppercase text-muted fw-semibold tracking-wider d-block mb-1 small">
                Карточка товара
            </span>
            <h2 class="text-secondary mb-3">
                {{ $product->name }}
            </h2>
            <div class="d-flex align-items-center justify-content-between mt-3">
                <div>
                    <span class="text-secondary small fw-semibold d-block mb-1">Цена:</span>
                    <span class="fs-4 text-success">
                        {{ $product->price->price }} <span class="fs-6">руб.</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
