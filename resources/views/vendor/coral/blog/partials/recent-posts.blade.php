<div class="row">
    <div class="col-xs-12">
        <div class="content-block">
            <span class="blue-line"></span>
            <h3>Recent Posts</h3>
        </div>
    </div>
    <section class="recent-posts">
        @foreach($recentposts as $post)
            <article class="recentpost">
                <a href="{{route("blog.post.show", $post->slug)}}">
                    <div class="imgContainer">
                        @if($post->featuredImage())
                            @if(isset($imageSmall))
                                <img src="{{$post->featuredImage()->getSize('small')}}"/>
                            @else
                                <img src="{{$post->featuredImage()->getSize('small')}}"/>
                            @endif
                        @endif
                    </div>
                    <div class="recentpost__title">{{$post->title}}</div>
                </a>
            </article>
        @endforeach
    </section>
</div>