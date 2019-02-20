@extends('pages.html.onecolumn')

@foreach($person as $row)

@section('seo-meta-tags')
    <title>{{$row->name}} - Capital Advisors, Ltd</title>
    <meta name="description" content="{{$row->name}}">
@stop

@section('hero')
    @include('pages.bio.partials.visual', [
        'large_image' => $row->large_image,
        'name' => $row->name,
        'focus' => $row->teamFocus,
        'imagePositionRight' => true,
        ])
@stop

@section("content")
    <main role="main" id="main">
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 alignleft-holder">
                        <div class="alignleft-section">
                            <div class="back-to-team hidden-xs">
                                <a href="{{route('team')}}"><i class="icon-arrow"></i> <span>back to our team</span></a>
                            </div>
                            @include('pages.bio.partials.profile', ['image' => $row->candid_image, 'name' => $row->name])
                            @if(isset($row->teamAffiliation[0]) && count($row->teamAffiliation)>0)
                                @include('pages.bio.partials.sidebar-section', ['items' => $row->teamAffiliation, 'title' => 'Professional Affiliations'])
                            @endif
                            @if(isset($row->teamCertification[0])  &&  count($row->teamCertification)>0)
                                @include('pages.bio.partials.sidebar-section', ['items' => $row->teamCertification, 'title' => 'Professional Certifications'])
                            @endif
                            @if(isset($row->teamExperience[0]) && count($row->teamExperience)>0)
                                @include('pages.bio.partials.sidebar-section', ['items' => $row->teamExperience, 'title' => 'Other Experience'])
                            @endif
                            @if(isset($row->boardMembership) && count($row->boardMembership)>0)
                                @include('pages.bio.partials.sidebar-section', ['items' => $row->boardMembership, 'title' => 'Board Memberships'])
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-8 alignright-holder">
                        @include('pages.bio.partials.content', ['content' => $row->body])
                    </div>
                </div>
                <div class="row visible-xs">
                    <div class="col-xs-12">
                        <div class="back-to-team">
                            <a href="{{route('team')}}"><i class="icon-arrow"></i> <span>back to our team</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop

@endforeach