@extends('pages.html.two-column-right')

@section('seo-meta-tags')
    <title>Who We Are - Capital Advisors, Ltd</title>
    <meta name="description" content="Since 1991 Capital Advisors, Ltd. has been dedicated to the <em>Financial Planning Process</em>: helping successful
            individuals achieve perspective with vision and discipline while reaching consensus amongst their other
            advisors. The result is a fully integrated and comprehensive look at a client’s financial affairs, well-defined
            objectives, and mutually agreed upon plans leading to foreseeable, more successful outcomes.">
@stop

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'Who We Are',
        'subtitle' => 'Experienced, Independent, Accessible',
        'image' => '/images/about-hero.jpg',
        'imagePositionLeft' => true,
        ])
@stop

@section('aside')
    @include('pages.about.partials.aside')
@stop

@section("content")
    <div class="content-block">
        <p>
            Since 1991 Capital Advisors, Ltd. has been dedicated to the <em>Financial Planning Process</em>: helping successful
            individuals achieve perspective with vision and discipline while reaching consensus amongst their other
            advisors. The result is a fully integrated and comprehensive look at a client’s financial affairs, well-defined
            objectives, and mutually agreed upon plans leading to foreseeable, more successful outcomes.
        </p>

        <p>This is accomplished in a cost effective, fee-based, open architecture and transparent fashion with
            completely independent objectivity. Our proprietary, customized <a href="{{route('cfm-horizon')}}"><strong>CFM Horizon<sup>&trade;</sup> – Financial Road
                Map</strong></a> allows us to
            create a visually straightforward blueprint that uncovers opportunities, optimizes resources, and results in an
            integrated and logical financial road map. This forward-looking perspective brings clarity to the numerous
            components that make up an individual’s financial life and provides a sound basis for investment, estate,
            retirement, and tax planning.
        </p>
    </div>
    <div class="content-block">
        <p>Over 230 years of cumulative experience with an average tenure of 16 years, and a total of 16 industry
            credentials including:</p>
        <ul>
            <li>CERTIFIED FINANCIAL PLANNER (CFP<sup>&reg;</sup>)</li>
            <li>Chartered Financial Analyst (CFA<sup>&reg;</sup>)</li>
            <li>Certified Public Accountant (CPA)</li>
            <li>Masters in Business Administration (MBA)</li>
            <li>Accredited Portfolio Management Advisor (APMA<sup>&reg;</sup>)</li>
            <li>Accredited Estate Planner (AEP<sup>&reg;</sup>)</li>
            <li>Chartered Mutual Fund Advisor (CMFA<sup>&reg;</sup>)</li>
            <li>Accredited Investment Fiduciary (AIF<sup>&reg;</sup>)</li>
        </ul>
    </div>
    <div class="content-block">
        <p>
            Capital Advisors, Ltd. falls into the industry classification of <em>Elite Ensemble Practice</em>.
        </p>
    </div>
@stop

