/*jslint browser: true*/
/*global $, jQuery*/
/*jslint white: false */
/*jslint sloppy: true */

$(document).on("ready", inicio);

/* --- Variables Globales --- */
var skills = {
        html5: 70,
        css3: 60,
        jquery: 70,
        mootools: 10,
        php: 80,
        symfony2: 40,
        zend: 10,
        photoshop: 35,
        illustrator: 10
    };


function inicio()
{

    $("h1").on("click", mixpanelRegister);

    //----------//
    // About Me //
    //-------------------------------------------------//

    /* --- Skills --- */
    $(".skills .bar .level").each(function () {
        var skillname  = $(this).parent().parent().attr('id'),
            skillvalue = skills[skillname] + "%";
        $(this).css('width', skillvalue);
    });

}

function mixpanelRegister()
{
    // This sends us an event every time a user clicks the button
    mixpanel.track("Button clicked");
}