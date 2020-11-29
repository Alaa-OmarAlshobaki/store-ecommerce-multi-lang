<div class="widget-content widget-content-area text-center">

    <div class="pagination-custom_outline">
        @if ($paginator->onFirstPage())
        <a href="javascript:void(0);" class="prev disabled"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a>
        @else
        <a href="javascript:void(0);" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a>
        @endif
        <ul class="pagination">
            <li><a href="javascript:void(0);">1</a></li>
              <!-- Array Of Links -->
        @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="active"><a href="javascript:void(0);">2</a></li>
            @else
            <li><a href="javascript:void(0);">3</a></li>
        </ul>

        <a href="javascript:void(0);" class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>

    </div>

</div>