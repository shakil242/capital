<div class="certification open-close">
    <a href="#" class="opener">
        <div class="title text-uppercase">Professional Certifications/Honors</div>
    </a>
    <div class="text-holder slide">
        <ul>
            @foreach($certifications as $certification)
                <li>{!! $certification['title'] !!}</li>
            @endforeach
        </ul>
    </div>
</div>