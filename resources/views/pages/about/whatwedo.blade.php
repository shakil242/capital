@extends('pages.html.two-column-right')

@section('seo-meta-tags')
    <title>What We Do - Capital Advisors, Ltd</title>
    <meta name="description"
          content="Our proprietary Cash Flow Model delivers a visually straightforward roadmap which helps uncover opportunities,
          optimizes resources, and results in integrated, logical, forward looking perspective.
          Designed in-house and customized to each client, our model is critical to understanding the numerous components of our clients’ financial lives,
          while providing a sound basis for investment, estate, retirement, and tax planning.">
@stop

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'What We Do',
        'subtitle' => 'Comprehensive, Straightforward Insight',
        'image' => '/images/about-hero.jpg',
        'imagePositionLeft' => true,
        ])
@stop

@section('aside')
    @include('pages.about.partials.aside')
@stop

@section("content")
    <div class="content-block">
        <h3>CFM Horizon<sup>&trade;</sup> – Financial Road Map</h3>
        <p>
            Our
            <a href="{{route('cfm-horizon')}}"><strong>proprietary Cash Flow Model</strong></a>
            delivers a visually straightforward roadmap which helps uncover
            opportunities, optimizes resources, and results in integrated, logical, forward looking perspective.
            Designed in-house and customized to each client, our model is critical to understanding the numerous
            components of our clients’ financial lives, while providing a sound basis for investment, estate,
            retirement, and tax planning.
        </p>
    </div>
    <div class="content-block">
        <h3>Unique Investment Advisory Process</h3>
        <p>We believe the only way to define risk is qualitatively AND quantitatively.
            <a href="{{route('cfm-horizon')}}"><strong>CFM Horizon<sup>&trade;</sup></strong></a>
            provides deeper insight than a traditional risk questionnaire. Where suitable, it charts a measurable and
            systematic means
            to gain a complete understanding of a client’s financial affairs, and quantify how much risk they need to
            take in order to arrive at the investment allocation that meets their objectives. By integrating this with
            the more subjective qualitative measures, our solutions-oriented investment planning process produces
            prudent strategic and tactical portfolios that help our clients focus on
            the things that are important to them.
        </p>
    </div>
    <div class="content-block">
        <h3>Comprehensive Oversight</h3>
        <p>Because we believe that asset allocation* is a main driver of risk and return, we can monitor investment
            assets that are not held by our firm and report all holdings in a consolidated fashion. This approach
            provides the comprehensive oversight required in order to properly allocate a client’s portfolio for best
            possible outcomes.
        </p>
        <p>*Asset allocation does not guarantee against a loss.</p>
    </div>
    <div class="content-block">
        <h3>Fiduciary Duty</h3>
        <p>A fiduciary holds a legal or ethical relationship of trust. Fiduciary duty carries with it the highest
            standard of care as defined by the law. The majority of wealth management professionals and/or investment
            advisors ARE NOT fiduciaries and are bound by much less stringent regulations. Capital Advisors, Ltd. is a
            Registered Investment Advisor with the U.S. Securities and Exchange Commission (SEC), which means we are
            required by regulation to act in our clients' best interests.
        </p>
    </div>
    <div class="content-block">
        <h3>Transparent, Predictable, Competitive Fee</h3>
        <p>Our fee, based on a percentage of investment assets under management, is competitively priced and all
            encompassing.
        </p>
    </div>
    <div class="content-block">
        <h3>Credentialed, Experienced & Tenured Team</h3>
        <p>Our team has over 230 cumulative years of experience in the wealth management industry, an average tenure at
            the firm of over 16 years, and hold 16 industry credentials including: CERTIFIED FINANCIAL PLANNER (CFP<sup>&reg;</sup>),
            Chartered Financial Analyst (CFA<sup>&reg;</sup>), Certified Public Accountant (CPA), Masters in Business Administration
            (MBA), Accredited Portfolio Management Advisor (APMA<sup>&reg;</sup>), Accredited Investment Fiduciary (AIF<sup>&reg;</sup>), Accredited
            Estate Planner (AEP<sup>&reg;</sup>), and Chartered Mutual Fund Advisor (CMFA<sup>&reg;</sup>).
        </p>
    </div>
@stop

