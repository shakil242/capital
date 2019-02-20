@extends('pages.html.two-column-right')

@section('seo-meta-tags')
    <title>How We Do It - Capital Advisors, Ltd</title>
    <meta name="description" content="We have been steadfastly independent for over 25 years. Capital Advisors, Ltd. has no competing corporate
            ties to financial institutions, investment managers or investment banks, resulting in only one overarching
            goal: to serve our clients by providing objective, comprehensive advice concerning their entire financial
            affairs.">
@stop

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'How We Do It',
        'subtitle' => 'Objective, Comprehensive Advice',
        'image' => '/images/about-hero.jpg',
        'imagePositionLeft' => true,
        ])
@stop

@section('aside')
    @include('pages.about.partials.aside')
@stop

@section("content")
    <div class="content-block">
        <h3>Independent</h3>
        <p>We have been steadfastly independent for over 25 years. Capital Advisors, Ltd. has no competing corporate
            ties to financial institutions, investment managers or investment banks, resulting in only one overarching
            goal: to serve our clients by providing objective, comprehensive advice concerning their entire financial
            affairs.
        </p>
    </div>

    <div class="content-block"><h3>Holistic</h3>
        <p>We subscribe to the Financial Planning Process: identifying and establishing financial goals, analyzing data,
            as well as developing, implementing, and monitoring strategies. Clients' financial affairs are
            interconnected
            and interdependent. Treating them in isolation tends to result in fragmentation, disintegration, and
            redundancy.
            We consolidate and integrate our clients' financial affairs, organizing them into understandable,
            detailed, yet summarized information so that they can understand the interrelationships of the component
            parts.
            This permits us to mutually uncover problems and opportunities while we develop, implement, and manage
            solutions.
        </p>
    </div>
    <div class="content-block"><h3>Consensus Building</h3>
        <p>As a financial gatekeeper, it is our policy to collaborate with our clients’ other advisors in order to
            create
            synergy, simplify and streamline the process, and consolidate viewpoints. This greatly increases the
            probability
            of successful outcomes, while often simultaneously curtailing the associated fees.
        </p>
    </div>

    <div class="content-block"><h3>Financial Social Work</h3>
        <p>Social work and financial planning are intertwined. Social work seeks to improve quality of life and enhance
            the
            wellbeing of individuals and families. We have always valued and respected the role that human factors play
            in
            the financial planning process, and firmly believe that their consideration and incorporation are required
            in
            order to develop well-defined goals and objectives. We have seen how ignoring these emotional and human
            drivers
            can result in a predominantly legalistic and tax-driven plan, which seldom produces satisfactory outcomes.
        </p>
    </div>
    <div class="content-block"><h3>Proactive and Responsive</h3>
        <p>Our job is to provide the perspective and vision required in order to implement prospective plans that
            account
            for both current conditions and future possibilities. All client matters are always treated with a sense of
            urgency. Our clients know they can expect prompt responses and follow-up to all inquiries and requests.
        </p>
    </div>
@stop

