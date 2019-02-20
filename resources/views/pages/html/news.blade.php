@if(!str_contains(Route::getCurrentRoute()->getName(),"blog") && !str_contains(Route::getCurrentRoute()->getUri(), "blog"))
    <section class="news-section">
        <div class="container">
            <div class="heading">
                <h2 class="text-center text-uppercase">NEWS & INSIGHTS </h2>
            </div>
            <div class="row news-row">
                <div class="col-sm-6 col-md-5 col-md-offset-1 news-col"> <!-- This is a javascript link for css reasons -->
                    <div class="block-holder" @if($latestpost) onclick="window.location = '{{route('blog.post.show', $latestpost->slug)}}';" style="cursor: pointer;" @endif>
                        <div class="block-title">
                            <strong class="text-uppercase">Latest Commentary from reCap</strong>
                        </div>
                        @if($latestpost)
                            @if($latestpost->featuredImage())
                                <div class="img-holder">
                                    <img src="{{$latestpost->featuredImage()->getSize('small')}}" alt="{{$latestpost->title}}" class="img-responsive"/>
                                </div>
                            @endif
                            <div class="content-holder">
                                <h4>{{$latestpost->title}}</h4>
                                <p>
                                    {!!  str_limit(strip_tags($latestpost->body,"<p>"), 150) !!}
                                </p>
                            </div>
                            <a href="{{route('blog.post.show', $latestpost->slug)}}" class="btn btn-default btn-forward" role="button">
                                READ MORE
                            </a>
                        @else
                            <div class="content-holder">
                                <h4>Coming soon!</h4>
                                <p>
                                    We haven't posted any blogs yet, check back soon.
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 news-col"> <!-- This is a javascript link for css reasons -->
                    <div class="block-holder" @if($latestnews) onclick="window.location = '{{route('blog.post.show', $latestnews->slug)}}';" style="cursor: pointer;" @endif>
                        <div class="block-title">
                            <strong class="text-uppercase">Our latest news feature</strong>
                        </div>
                        @if($latestnews)
                            @if($latestnews->featuredImage())
                                <div class="img-holder">
                                    <img src="{{$latestnews->featuredImage()->getSize('small')}}" alt="{{$latestnews->title}}" class="img-responsive"/>
                                </div>
                            @endif
                            <div class="content-holder">
                                <h4>{{$latestnews->title}}</h4>
                                <p>
                                    {!!  str_limit(strip_tags($latestnews->body,"<p>"), 150) !!}
                                </p>
                            </div>
                            <a href="{{route('blog.post.show', $latestnews->slug)}}" class="btn btn-default btn-forward" role="button">
                                READ MORE
                            </a>
                        @else
                            <div class="content-holder">
                                <h4>Coming soon!</h4>
                                <p>
                                    We haven't posted any news articles yet, check back soon.
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<div class="subscribe-section text-center" style="background-image: url('/images/bg-subscribe-section.png');">
    <div class="container animated subscribe-section__display">
        <span class="text-holder text-uppercase">Monthly observations on wealth management and current events from Capital Advisors, Ltd.</span>
        <a class="btn btn-primary analytics_event" role="button" data-category="button" data-action="click" data-label="Send Me Updates">Send me updates</a>
    </div>
    <div class="container animated subscribe-section__form" id="contact-form">
        {!! Form::open(['route' => 'newsletter.store', 'class' => 'form-inline']) !!}
        <div class="form-group @if($errors->has('newsletter_Email')) error @endif">
            {!! Form::text('newsletter_Email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
        </div>
        <button type="submit" data-category="button" data-action="click" data-label="Sign Me Up" class="btn btn-primary analytics_event">Sign me up</button>
        {!! Form::close() !!}
        <a href="#" class="subscribe-section__reset" data-reset="display">Nevermind...</a>
    </div>
    <div class="container animated subscribe-section__result">
        <div class="text-uppercase message">Message</div>
        <div><a href="#" class="subscribe-section__reset" data-reset="form">Try Again...</a></div>
    </div>
</div>
@if(!Request::is('faq'))
    <section class="qa-section">
        <div class="container">
            <div class="ico-holder text-center">
                <img src="/images/icon-4.png" alt="image description">
            </div>
            <strong class="qa-title text-center text-uppercase">QUESTIONs you should ask... <span>answers you should EXPECT...</span></strong>
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
            <div class="btn-holder text-center">
                <a href="{{route('faq')}}" class="btn btn-default btn-forward" role="button">GET ALL THE ANSWERS</a>
            </div>
        </div>
    </section>
@endif