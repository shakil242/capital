<div class="certification open-close">
    <a href="#" class="opener">
        <div class="title text-uppercase">Professional Affiliations</div>
    </a>
    <div class="text-holder slide">
        <ul>
            @foreach($affiliations as $affiliation)
                <li>{!! $affiliation['title'] !!}</li>
            @endforeach
        </ul>
    </div>
</div>