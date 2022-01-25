@if ($paginator->hasPages())
<nav class="flexbox mt-30">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="btn btn-white disabled"> {!! __('pagination.previous') !!}</a>
        @else
            <a class="btn btn-white" href="{{ $paginator->previousPageUrl() }}"> {!! __('pagination.previous') !!}</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-white" href="{{ $paginator->nextPageUrl() }}">{!! __('pagination.next') !!}</a>
        @else
        <a class="btn btn-white disabled">{!! __('pagination.next') !!}</a>
        @endif
    </nav>
@endif
  


