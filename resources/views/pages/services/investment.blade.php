@extends('pages.html.two-column-left')

@section('seo-meta-tags')
    <title>Investment Planning - Capital Advisors, Ltd</title>
    <meta name="description" content="Our strategic and tactical approach reduces emotion and prudently manages assets to increase the probability
            of meeting a client’s long-term financial goals.">
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
        <h3>Investment Planning</h3>
        <p>
            Our strategic and tactical approach reduces emotion and prudently manages assets to increase the probability
            of meeting a client’s long-term financial goals. Portfolios are tailored to our client’s specific facts,
            risk tolerance, and strategy preference and where appropriate integrated into
            <a href="{{route('cfm-horizon')}}"><strong>CFM Horizon<sup>&trade;</sup></strong></a>
            , which serves as
            their financial road map. To accomplish this, our portfolios are designed to incorporate the following:
        </p>
        <ul class="styled">
            <li>Proper diversification and strategic asset allocation to reduce “idiosyncratic” risk and align the
                baseline portfolio risk/return characteristics with the investor’s goals.*
            </li>
            <li>Dedicated allocations to help dampen volatility: higher quality equities, active managers, passive
                assets, and alternatives.
            </li>
            <li>Tactical allocations that focus on reducing downside exposure; these are done methodically, based on
                market and economic fundamentals.
            </li>
            <li>
                <a href="{{route('cfm-horizon')}}"><strong>CFM Horizon<sup>&trade;</sup></strong></a>
                long-run cash flow projections, which assist in determining the appropriate risk/return
                portfolio profile and, when needed, help develop a portfolio waterline – the asset value required to
                help meet the client’s future obligations.
            </li>
        </ul>
        <p>
            *Asset allocation does not guarantee against a loss.
        </p>
    </div>
@stop

