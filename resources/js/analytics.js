$(document).on('click touchstart', '.analytics_event', function ( event )
{
    var $this = $(this);
    var data = $this.data();
    var category = ( data.category !== undefined ) ? data.category : 'Link';
    var action = ( data.action !== undefined ) ? data.action : 'Click';
    var label = ( data.label !== undefined ) ? data.label : ( $this.attr('title') || $this.text() );
    var value = ( data.value !== undefined ) ? data.value : 0;
    //console.log('send_analytics_hit: ' + category + ', ' + action + ', ' + label + ', ' + value);return;

    if ( typeof(value) === 'undefined' )
    {
        value = 0;
    }

    // Google Analytics
    if ( window.ga )
    {
        // https://developers.google.com/analytics/devguides/collection/analyticsjs/events
        // send, event, [category], [action], [label], [value](number)
        window.ga('send', 'event', category, action, label, value);
    }
    else if ( window._gaq )
    {
        //var _gaq = window._gaq || [];
        window._gaq.push(['_trackEvent', category, action, label, value]);
    }
});