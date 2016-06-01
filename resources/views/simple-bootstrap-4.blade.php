<ul class="pagination">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
        <li class="page-item disabled"><span>&laquo;</span></li>
    @else
        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
    @endif

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
    @else
        <li class="page-item disabled"><span>&raquo;</span></li>
    @endif
</ul>
