@extends('pages.html.two-column-left')

@section('seo-meta-tags')
    <title>Estate Planning - Capital Advisors, Ltd</title>
    <meta name="description" content="Our process addresses the three basic tenets of estate planning – financial planning, orderly transfer of
            assets, and overall preservation of wealth.">
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
        <h3>Estate Planning</h3>
        <p>Our process addresses the three basic tenets of estate planning – financial planning, orderly transfer of
            assets, and overall preservation of wealth.
        </p>
        <p>We educate and inform our clients on the options available to their well-defined objectives. Our
            objective-driven planning process results in a high degree of implementation and predictable results,
            removing many variables through a detailed process of analysis – identifying problems, finding
            opportunities, and delivering solutions. It’s also comprehensive, considering many of the following:
        </p>
        <ul class="styled">
            <li>Property Titling</li>
            <li>Beneficiary Designations</li>
            <li>Trust Options</li>
            <li>Retirement Plan Distributions</li>
            <li>Gifting</li>
            <li>Asset Valuation</li>
            <li>Estate Taxes</li>
            <li>Non-Tax Issues</li>
            <li>Asset Protection Structures</li>
            <li>Family Foundations</li>
            <li>Generation Skipping Transfer Tax</li>
            <li>Estate Valuation Freeze Techniques</li>
            <li>Charitable Planning</li>
            <li>Split Interest Estate Tax Reduction Concepts</li>
            <li>Fractured Entity Valuation Discounts</li>
            <li>Intergenerational Estate Planning</li>
            <li>Integration with Business Succession Planning</li>
        </ul>
    </div>
@stop

