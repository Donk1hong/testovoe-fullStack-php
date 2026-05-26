@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row g-4 catalog-container m-0">
            <div class="col-12 col-md-4 col-lg-3 p-0 sidebar-menu-column">
                <div class="list-group menu-wrapper">
                    @include('components.mega-menu')
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9 d-flex flex-column products-column ps-md-5 p-0">
                @include('components.sorting')
                <div class="row row-cols-1 row-cols-md-3 g-4 products-wrapper mb-5 mx-0">
                    @if($products->isNotEmpty())
                        @foreach($products as $product)
                            <div class="col">
                                @include('components.catalog-product', ['product' => $product])
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 d-flex justify-content-center p-5">
                            <h2>Товаров нету</h2>
                        </div>
                    @endif
                </div>
                @if($products->isNotEmpty())
                    <div class="d-flex justify-content-center mt-auto pb-4 pagination-wrapper w-100">
                        <div class="d-flex justify-content-start justify-content-md-center mt-auto pb-4 pagination-wrapper w-100 overflow-auto px-3 flex-nowrap">
                            @include('components.paginate')
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
