<nav>
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link text-black-50" href="{{$products->previousPageUrl()}}"
               aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        @for($i=1;$i<=$products->lastPage();$i++)
            <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }}" aria-current="page">
                <a class="page-link {{ $products->currentPage() == $i ? 'text-light' : 'text-black-50' }}" href="{{$products->url($i)}}">{{$i}}</a>
            </li>
        @endfor
        <li class="page-item">
            <a class="page-link text-black-50" href="{{$products->nextPageUrl()}}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
