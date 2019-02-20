@extends('pages.html.two-column-left')

@section('seo-meta-tags')
    <title>CFM Horizon&trade; - Capital Advisors, Ltd</title>
    <meta name="description" content="">
@stop

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'Our Services',
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
        <h3>CFM Horizon<sup>&trade;</sup> - Cash Flow Model</h3>
        <p>Our proprietary Cash Flow Model delivers a visually straightforward roadmap which helps uncover
            opportunities, optimizes resources, and results in integrated, logical, forward looking perspective.
            Designed in-house and customized to each client, our model is critical to understanding the numerous
            components of our clients’ financial lives, while providing a sound basis for investment, estate,
            retirement, and tax planning.
        </p>
        <h3>Gain Financial Perspective</h3>
        <p>CFM Horizon<sup>&trade;</sup> integrates a client’s cash flow with their balance sheet for an easy-to-follow
            financial blueprint. Our detailed analysis outlines where a client stands when it
            comes to reaching their long-run financial goals.
        </p>
        <h3>Discover Portfolio Risk/Return Profile</h3>
        <p>CFM Horizon<sup>&trade;</sup> provides a global overview of a client’s financial picture, where they stand
            currently, and where they ultimately want to go. This understanding helps us build a portfolio that is
            suitable for them and guards against the biggest risk investors face – not meeting their long-run financial
            goals.
        </p>
        <h3>Guidance on Large Financial Decisions</h3>
        <p>CFM Horizon<sup>&trade;</sup> lays out cash inflows and outflows to help guide a client on major financial
            events: selling or buying a business, real estate transactions, retiring, college funding, estate planning
            decisions, and other major financial changes.
        </p>
        <p>Our model outlines investment strategies, tests planning options, and uncovers planning opportunities. It
            allows a client to see the ramifications of a large scale financial decision, and how it impacts their
            finances moving forward. This foresight offers insight into planning options and translates into better
            decision making.
        </p>
    </div>
@stop

