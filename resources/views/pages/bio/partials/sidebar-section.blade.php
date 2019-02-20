<div class="{{str_slug($title)}} open-close">
    <a href="#" class="opener">
        <div class="title text-uppercase">{{$title}}</div>
    </a>
    <div class="text-holder slide">
        <ul>
            @foreach($items as $item)
                <li>{!! $item['title'] !!}</li>
            @endforeach
        </ul>
    </div>
</div>