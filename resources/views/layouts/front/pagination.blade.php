
    @if ($paginator->lastPage() > 1)
    <div class="page-pagination clear-fix">
        <div class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}">
                <i class="fa fa-angle-double-left"></i>
            </a>
        </div>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <a href="{{ $paginator->url($i) }}" class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
        @endfor
        <div class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >
                <i class="fa fa-angle-double-right"></i>
            </a>
        </div>
    </div>
    @endif
