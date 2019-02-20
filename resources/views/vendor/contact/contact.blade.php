@extends('pages.html.two-column-left')

@section('hero')
    @include('pages.partials.visual',[
        'title' => 'Contact Us',
        'subtitle' => 'Accessible, Straightforward Advice'])
@stop

@section('aside')
    <div class="alignleft-section">
        <img src="/images/map.jpg" class="img-responsive" alt="Capital Advisors Map Location"/>
    </div>
@stop

@section('content')
    <section class="contact-section">
        <div class="content-block">
            <p>We are frequently sought out by the media for financial comments and advice. If you would like copies
                of the materials in which we are quoted, or any other firm information, please contact us.</p>
        </div>
        <div class="content-block">
            <h5>Address</h5>
            <p>
                Capital Advisors, Ltd.
                <br/>20600 Chagrin Boulevard
                <br>1115 Tower East
                <br>Shaker Heights, Ohio 44122<br>
                <a href="http://maps.google.com/maps?f=q&amp;hl=en&amp;q=20600+Chagrin+Blvd,+Shaker+Heights,+Cuyahoga,+Ohio+44122&amp;z=17"
                   target="_blank">Directions</a>
            </p>
        </div>
        <div class="content-block">
            <h5>Phone</h5>
            <p>
                (216) 295-7900
                <br/>T(888) 295-7908
            </p>
        </div>
        <div class="content-block">
            <h5>Fax</h5>
            <p>(216) 295-8300</p>
        </div>
        <div class="content-block">
            <h5>Email</h5>
            <p><a href="mailto: info@capitaladvisorsltd.com">info@capitaladvisorsltd.com</a></p>
        </div>
        <div class="content-block">
            <h5>SEC Form ADV</h5>
            <p>
                <a href="http://www.adviserinfo.sec.gov/IAPD/content/ViewForm/crd_iapd_stream_pdf.aspx?ORG_PK=153600"
                   target="_blank">Capital Advisors, Ltd. Form ADV</a></p>
        </div>
    </section>
@stop


