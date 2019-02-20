@extends('pages.html.two-column-left')

@section('seo-meta-tags')
    <title>Business Succession - Capital Advisors, Ltd</title>
    <meta name="description" content="Ownership of a business enterprise is accompanied by three basic rights: equity, income, and control. Many
            business owners have not implemented succession plans because they are unaware that these rights can be
            completely separated – and often are – in order to meet all parties' objectives.">
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
        <h3>Business Succession</h3>
        <p>Ownership of a business enterprise is accompanied by three basic rights: equity, income, and control. Many
            business owners have not implemented succession plans because they are unaware that these rights can be
            completely separated – and often are – in order to meet all parties' objectives. Many others have not taken
            the time and effort to define those objectives, and still others believe that no options exist to meet their
            objectives. As difficult as it is to grow and manage a business enterprise, the last great test of ownership
            is in its successful transition of ownership and management. Whether succession is to a family member or
            third-parties we recognize that:
        </p>
        <ul class="styled">
            <li>A plan must begin with well-defined objectives. The landscape is littered with failed plans that begin
                with financial products or tax planning concepts.
            </li>
            <li>Our job is to educate and inform our clients regarding viable options based upon those objectives.</li>
            <li>Optimum outcomes are gained through coordination with, and the consensus of, the client's other
                advisors.
            </li>
            <li><a href="{{route('cfm-horizon')}}"><strong>CFM Horizon<sup>&trade;</sup></strong></a> our proprietary financial modeling (individual and corporate) is the road map that
                demonstrates options, illustrates financial viability, develops consensus, and ultimately leads to
                implementation.
            </li>
        </ul>
    </div>
@stop

