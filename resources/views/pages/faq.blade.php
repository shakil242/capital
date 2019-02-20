@extends('pages.html.onecolumn')

@section('seo-meta-tags')
    <title>Capital Advisors, Ltd. Insights - Capital Advisors, Ltd</title>
    <meta name="description" content="Questions You Should Ask... Answers You Should Expect...">
@stop

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'QUESTIONS YOU SHOULD ASK... ANSWERS YOU SHOULD EXPECT...',
        'subtitle' => 'How you should choose an advisor',
        'image' => '/images/blog-hero.jpg'
        ]
    )
@stop

@section("content")
    <main role="main" id="main">
        <section class="qa-section">
            <div class="container">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    @foreach($questions as $key => $question)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-{{$key}}">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-{{$key}}" aria-expanded="false"
                                       aria-controls="collapse-{{$key}}">
                                        {!! $question['question'] !!}
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-{{$key}}" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="heading-{{$key}}">
                                <div class="panel-body">
                                    <p>{!! $question['answer'] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="content-block">
                    <small>
                        Note: This information is presented as an initial guide to finding a qualified advisory firm and
                        advisor. Quality advice can be found under various service models, in differing venues from
                        firms both employing Registered Representatives and Registered Investment Advisors.
                    </small>
                </div>
            </div>
        </section>
    </main>
@stop

