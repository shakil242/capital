<article class="post">
    <h3 class="text-uppercase"><a href="{{route("blog.post.show", $post->slug)}}">{{$post->title}}</a></h3>
    @if($post->featuredImage())
        <div class="img-holder">
            @if(isset($imageSmall))
                <a href="{{route("blog.post.show", $post->slug)}}"><img src="{{$post->featuredImage()->getSize('small')}}" class="main-image img-responsive"/></a>
            @else
                @if(!isset($limit))
                    <img src="{{$post->featuredImage()->getSize('main')}}" class="main-image img-responsive"/>
                @else
                    <a href="{{route("blog.post.show", $post->slug)}}"><img src="{{$post->featuredImage()->getSize('main')}}" class="main-image img-responsive"/></a>
                @endif
            @endif
        </div>
    @endif

    <span class="add-info">
        @if($post->isPublished())
        {{$post->published_at->format('l, F j, Y')}}
        <span>|</span>
        @endif
        @if($post->hasCategories())
            <ul style="list-style: none; display: inline-block; padding: 0;">
                <li style="display: inline-block">
                @foreach($post->categories as $category)
                        @if($category == $post->categories->last())
                            <a href="{{route("category.list", $category->slug)}}"> {{$category->name}}</a>
                        @else
                            <a href="{{route("category.list", $category->slug)}}"> {{$category->name}}</a> |
                        @endif
                    @endforeach
                </li>
            </ul>
        @endif
    </span>
    @if(!isset($limit))
        <div class="social-buttons">
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5772bb16db4be0b6" async="async"></script>
            <div class="addthis_sharing_toolbox"></div>
        </div>
    @endif
    <span class="orange-line"></span>
    @if(isset($limit))
        <p>{{str_limit(strip_tags($post->body), 200)}}</p>
        <a href="{{route("blog.post.show", $post->slug)}}" type="button" class="btn btn-default ellipsis">read more</a>
    @else
        <p>{!! $post->body !!}</p>
        <div class="attachments">
            @if($post->attachments()->count() > 0)
                <div class="content-block">
                    @foreach($post->attachments() as $attachment)
                        <ul>
                            <li><i class="fa fa-file"></i> <a href="{{$attachment->getPath()}}">{{$attachment->name}}</a></li>
                        </ul>
                    @endforeach
                </div>
            @endif
        </div>
    @endif
</article>