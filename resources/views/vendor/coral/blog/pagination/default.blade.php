@if ($paginator->lastPage() > 1)
    <div class="pagination-holder text-uppercase">
        <nav>
            <ul class="pagination">
                <li class="arrows {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                    @if($paginator->currentPage() == 1)
                        <a href="#"><i class="fa fa-long-arrow-left"></i></a>
                    @else
                        <a href="{{ $paginator->url(1) }}" aria-label="Previous"><i class="fa fa-long-arrow-left"></i></a>
                    @endif
                </li>
                @for ($i = $paginator->currentPage() - 3; $i <= $paginator->currentPage() + 3; $i++)
                    @if($i < 1)
                    @elseif($i > $paginator->lastPage())
                    @else
                        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                            @if($paginator->currentPage() == $i)
                                <a href="#">{{$i}}</a>
                            @else
                                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                            @endif
                        </li>
                    @endif
                @endfor
                <li class="arrows {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                    @if($paginator->currentPage() == $paginator->lastPage())
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    @else
                        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" aria-label="Next" ><i class="fa fa-long-arrow-right"></i></a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
@endif