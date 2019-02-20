@extends('pages.html.two-column-left')

@section('seo-meta-tags')
    <title>Insurance Management - Capital Advisors, Ltd</title>
    <meta name="description" content="Life insurance is a financial tool that is often utilized in wealth management for its leveraging and
            preferential tax characteristics. The magnitude of its role in financial planning has led us to develop
            strong internal consulting capabilities.">
@stop

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'OUR SERVICES',
        'subtitle' => 'Our diverse offering of services delivers a forward-looking perspective to our clients’ financial lives,
            providing clarity as well as a sound basis for investment, estate, retirement, and business succession, as
            well as tax planning.',
        'image' => '/images/services-hero.jpg'])
@stop

@section('aside')
    @include('pages.services.partials.aside')
@stop

@section("content")
    <div class="content-block">
        <h3>Insurance Management</h3>
        <p>Life insurance is a financial tool that is often utilized in wealth management for its leveraging and
            preferential tax characteristics. The magnitude of its role in financial planning has led us to develop
            strong internal consulting capabilities. Insurance is a complex financial asset with a multitude of features
            and riders that affect cost, risk, and return. These need to be monitored on an ongoing basis.
        </p>
        <p>We take a bespoke approach to a client’s insurance needs by reviewing existing policies for necessity,
            purpose, income and estate tax consequences, risk, cost, and exercisable options. We also analyze the
            integration of new products vs. other alternative financial instruments and techniques.
        </p>
        <p>Given that each client’s insurance needs are different, we advise on variety of issues:</p>
        <ul class="styled">
            <li>Analyzing and comparing policy performance relative to original projections for existing policies or
                making
                comparisons of new products by testing product illustrations, company performance, and financial
                strength
                relative to projections.
            </li>
            <li>Re-engineering existing contracts to make improvements for better performance.</li>
            <li>Advising clients on any changes needed to achieve the intended objectives of the policy or plan.</li>
            <li>Comparative cost benefit analysis of a variety of financial instruments and techniques which meet
                objectives.
            </li>
            <li>Reviewing split dollar programs, deferred compensation funding, buy/sell funding, and other business
                uses
                of insurance contract.
            </li>
        </ul>
    </div>
@stop

