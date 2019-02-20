@extends('pages.html.two-column-left')

@section('seo-meta-tags')
    <title>Financial Planning - Capital Advisors, Ltd</title>
    <meta name="description" content='We strongly believe financial planning is an on-going "process" not a "project." Our comprehensive approach includes:'>
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
        <h3>Financial Planning</h3>
        <p>
            We strongly believe financial planning is an on-going "process" not a "project." Our comprehensive approach includes:
        </p>
        <ul class="styled">
            <li>Identifying and establishing financial goals</li>
            <li>Analyzing and consolidating data</li>
            <li>Integrating financial affairs, uncovering problems, and planning opportunities</li>
            <li>Developing, implementing, and managing wealth solutions</li>
        </ul>
    </div>
@stop

