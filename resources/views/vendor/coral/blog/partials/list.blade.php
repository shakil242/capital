@if($posts->count() > 0)
    @foreach($posts as $post)
        @include("coral::blog.partials.item", ['limit' => true])
    @endforeach
    @include('coral::blog.pagination.default', ['paginator' => $posts])
@else
    <div class="content-section">
        <div class="content-block">
            <p>Oh no! Looks like there are no posts that match your search!</p>
            <a class="btn btn-warning btn-forward" href="{{route("coral.blog")}}">Back to blog</a>
        </div>
    </div>
@endif