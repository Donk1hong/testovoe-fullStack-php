<!-- Из-за нехватки времени на реализацию мобильной навигации в Bootstrap, реализовал базовый, минимально допустимый адаптив для экранов смартфонов -->
@foreach($categories as $category)
    <div class="list-group-item list-group-item-action position-relative menu-item">
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('catalog.category', $category->id)}}" class="text-decoration-none text-secondary link-secondary">
                <span >{{ $category->name }}</span>
                <span class="text-muted">({{ $category->products_count }})</span>
            </a>
            <span class="text-muted">&raquo;</span>
        </div>
        @if($category->recursiveChildren->isNotEmpty())
            <div class="position-absolute top-0 start-100 bg-white shadow rounded p-4 d-none mega-menu z-3">
                <div class="row">
                    @foreach($category->recursiveChildren as $child)
                        <div class="col-12 mb-4">
                            <a href="{{ route('catalog.category', $child->id)}}" class="text-decoration-none text-secondary">
                                <h6 class="fw-bold text-dark text-uppercase mb-2 link-secondary">
                                    {{ $child->name}}
                                    <span class="text-dark">({{ $child->products_count }})</span>
                                </h6>
                            </a>
                            @if($child->recursiveChildren->isNotEmpty())
                                <ul class="list-unstyled">
                                    @foreach($child->recursiveChildren as $subChild)
                                        <li class="mb-1 position-relative sub-menu-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('catalog.category', $subChild->id)}}" class="text-decoration-none text-secondary small link-secondary">
                                                    {{ $subChild->name }}
                                                    <span class="text-muted">({{ $subChild->products_count }})</span>
                                                    @if($subChild->recursiveChildren->isNotEmpty())
                                                        <span class="text-muted">&rsaquo;</span>
                                                    @endif
                                                </a>
                                            </div>
                                            @if($subChild->recursiveChildren->isNotEmpty())
                                                <div class="position-absolute bg-white shadow rounded p-3 d-none sub-mega-menu">
                                                    <ul class="list-unstyled mb-1">
                                                        @foreach($subChild->recursiveChildren as $subSubChild)
                                                            <li class="mb-1">
                                                                <a href="{{ route('catalog.category', $subSubChild->id)}}" class="text-decoration-none text-secondary small d-block hover link-secondary">
                                                                    {{ $subSubChild->name }}
                                                                    <span class="text-muted">({{ $subSubChild->products_count }})</span>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endforeach
