@extends('pages.html.onecolumn')

@section('seo-meta-tags')
    <title>Our Team - Capital Advisors, Ltd</title>
    <meta name="description" content="Our breadth of expertise and knowledge provides multiple resources and avenues for solutions. Get to know more about us personally.">
@stop

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'Our Team',
        'subtitle' => 'Our breadth of expertise and knowledge provides multiple resources and avenues for solutions. Get to know more about us personally.',
        'image' => '/images/about-hero.jpg',
        'imagePositionLeft' => true
        ])
@stop

@section("content")
    <main role="main" id="main">
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <?php $i = 0; ?>
                    @foreach($people as $person)
                        <?php $jobs=array();?>
                            @for ($i = 0; $i < count($person['teamJobs']); $i++)
                         <?php   $jobs[]=$person['teamJobs'][$i]['title']; ?>
                            @endfor
                            <div class="team">
                            <a href="{{route('bio', ['slug' => $person['slug']])}}">
                                <img class="img-responsive" alt="{{$person['name']}}" src="{{$person['image']}}">
                                <div class="info">
                                    <h5>{{$person['name']}}</h5>
                                    <span>{!! implode(', ', $jobs) !!}</span>
                                </div>
                            </a>
                        </div>
                            <?php $i++; ?>
                        @endforeach
                </div>
            </div>
        </section>
    </main>
@stop
