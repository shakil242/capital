<div class="visual inner {{isset($imagePositionLeft) ? 'visual--mobile-shift-right' : ''}} {{isset($imagePositionRight) ? 'visual--mobile-shift-left' : ''}}" style="background-image: url('{{isset($image) ? $image : '/images/bg-visual-blog.png'}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="visual-holder">
                    <h1 class="page-title text-uppercase">{{$title}}</h1>
                    <span class="orange-line"></span>
                    <p>{{$subtitle}}</p>
                </div>
            </div>
        </div>
    </div>
</div>