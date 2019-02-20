@extends('pages.html.two-column-left')

@section('seo-meta-tags')
    <title>Personal Retirement Planning - Capital Advisors, Ltd</title>
    <meta name="description" content="We integrate all the pieces of a client’s financial affairs through CFM Horizon<sup>&trade;</sup>, our
            easy-to-understand proprietary financial model. This serves as a road map and helps answer the most
            important questions">
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
        <h3>Personal Retirement Planning</h3>
        <p>We integrate all the pieces of a client’s financial affairs through <a href="{{route('cfm-horizon')}}">CFM Horizon<sup>&trade;</sup></a>, our
            easy-to-understand proprietary financial model. This serves as a road map and helps answer the most
            important questions:</p>
        <ul class="styled">
            <li>Can I reach my long-term financial goals and objectives?</li>
            <li>When can I retire?</li>
            <li>Will I be financially secure?</li>
            <li>What are the income tax consequences?</li>
            <li>When should I take distributions from my qualified plan?</li>
            <li>How should my investments be allocated?</li>
            <li>How much risk should I be taking?</li>
        </ul>
    </div>
@stop

