<div class="visual inner bio-visual  {{isset($imagePositionLeft) ? 'visual--mobile-shift-right' : ''}} {{isset($imagePositionRight) ? 'visual--mobile-shift-left' : ''}}" style="background-image: url('{{$large_image}}');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="visual-holder">
                    <h1 class="text-uppercase">{{$person[0]['name']}}</h1>
                    <span class="orange-line"></span>
                    <p>
                        <em>Areas of Focus:</em> <br>
                        @foreach($focus as $title)
                            {!! $title['title'] !!} <br/>
                        @endforeach
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
