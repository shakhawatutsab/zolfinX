@if ($paginator->hasPages())

        <ul class="t-list zol-pagination d-flex flex-wrap">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="zol-pagination__list disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="zol-pagination__list">
                    <a class="t-link zol-pagination__card active" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="zol-pagination__list disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="zol-pagination__list active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="zol-pagination__list"><a class="t-link zol-pagination__card active" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="zol-pagination__list">
                    <a class="t-link zol-pagination__card active" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="zol-pagination__list disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>

@endif
