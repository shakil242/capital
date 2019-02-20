@extends("pages.html.onecolumn")

@section("seo-meta-tags")
    <title>Blog @if(isset($category)) > {{$category->name}} @endif</title>
@stop

@section('hero')
    <div class="visual inner" style="background-image: url('/images/blog-hero.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="visual-holder">
                        @if(isset($category) && (str_contains($category, "news")))
                            <h1>NEWS & AWARDS</h1>
                            <span class="orange-line"></span>
                            <p>Latest news and awards from Capital Advisors, Ltd.</p>
                        @else
                            <h1>reCap BLOG</h1>
                            <span class="orange-line"></span>
                            <p>Clear and actionable insights on wealth management from Capital Advisors, Ltd.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section("content")

    <main role="main" id="main">
        <div class="container">
            <div class="row">
                @if((isset($category) && (!str_contains($category, "news"))) || Route::currentRouteName() == 'coral.blog' || (isset($post) && (!$post->inCategory("news"))) )
                    <div class="col-xs-12 col-md-8">
                        @include("coral::blog.partials.list")
                    </div>
                    <div class="col-xs-12 col-md-4">
                        @include("coral::blog.partials.sidebar")
                    </div>
                @else
                    <div class="col-xs-12 col-md-12">
                        @include("coral::blog.partials.list")
                    </div>
                @endif
            </div>
        </div>
    </main>
@stop