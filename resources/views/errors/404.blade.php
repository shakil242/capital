@extends('errors.error')

@section('seo-meta-tags')
    <title>404 - Capital Advisors, Ltd</title>
    <meta name="description" content="404 - Page not found">
@stop

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'Oops! 404',
        'subtitle' => "Sorry, but this page couldn't be found.",
        ]
    )
@stop

@section("content")
    <section class="services">
        <div class="container">
            <div class="row column-section">
                <div class="text-center" style="margin: 0 auto; max-width: 800px;">
                    <p>Capital Advisors, LTD provides a comprehensive, objective and solution-oriented approach to wealth
                        management and financial planning for successful individuals and family business owners.</p>
                    <a href="{{route('home')}}" class="btn btn-warning btn-forward" role="button">learn
                        more</a>
                </div>
            </div>
        </div>
    </section>
@stop

