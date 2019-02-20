@extends('pages.html.two-column-left')

@section('seo-meta-tags')
    <title>Corporate Executive & Retirement Planning - Capital Advisors, Ltd</title>
    <meta name="description" content=" We are skilled in the nuances of both qualified and non-qualified retirement plans. It is imperative that we
            understand these plans for design and implementation, as well as integration into a client’s personal
            financial affairs.">
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
        <h3>Corporate Executive & Retirement Planning</h3>
        <p>
            We are skilled in the nuances of both qualified and non-qualified retirement plans. It is imperative that we
            understand these plans for design and implementation, as well as integration into a client’s personal
            financial affairs.
        </p>
        <p>
            We integrate clients’ executive compensation plans – stock options, restricted stock, and deferred
            compensation, among others – with their other assets to provide a comprehensive picture of their affairs. We
            then incorporate that comprehensive picture into <a href="{{route('cfm-horizon')}}"><strong>CFM Horizon<sup>&trade;</sup></strong></a>, our easy-to-understand proprietary financial
            road map, to develop a strategy for acquiring, managing, and the eventual distribution of executive
            compensation plans:
        </p>
        <ul class="styled">
            <li>Consolidate all plans – stocks options, restricted stock, deferred compensation, bonus – into a top
                down report so our clients know exactly what they have and where it is held.
            </li>
            <li>In the case of stock options, use technical and fundamental analysis along with the executive’s view of
                the stock to identify strategic exit points on company stock.
            </li>
            <li>Discuss and advise on the advantageous tax benefits of certain plans.</li>
            <li>Integrate disposition of plan assets and/or stock with cash flow requirements.</li>
            <li>Use prudent risk management to help build a customized plan.</li>
        </ul>
    </div>
@stop

