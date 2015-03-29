$(document).ready(function(){
    appendButtons();

    /** Footer to bottom */
    var pageHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < pageHeight) {
        $('#footer').css('margin-top', (pageHeight - footerTop) + 'px');
    }


    $(function() {
        FastClick.attach(document.body);
    });

    $('.conference-button-day').on('click', function () {
        var value = $(this).attr('data-value');

        var body = $('body');
        $("body .session-group").each(function(){
            var group = $(this);

            if(group.attr('data-value') === value || value === 'all')
                group.show();
            else
                group.hide();
        });
    });

    /* Function is partly from http://www.designchemical.com/blog/index.php/jquery/live-text-search-function-using-jquery/ */
    $("#filter").keyup(function(){
        var filter = $(this).val(), count = 0;


        $(".session").each(function(){
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).closest('.session-group').find('.session-information').fadeOut();
                $(this).fadeOut();

            } else {
                var session = $(this);
                session.closest('.session-group').find('.session-information').show();
                session.show();
                count++;
            }
        });

        if( $("#filter").val().length > 0)
            $("#filter-count").text(+count + " results");
        else
            $("#filter-count").empty();
    });

    $("#advanced-options").on('click', '.close', function(){
        var content = $(this).closest('#advanced-options').find('.content');

        content.slideToggle();
    });



    $('.session').on('click', '.button-schedule-remove', function(e){
        e.preventDefault();
        var button = $(this);

        //Find URL to resource
        var sessionContainer = button.closest('.session');
        var url = sessionContainer.attr('data-url');
        var sessionId = sessionContainer.attr('data-value');

        $.ajax({
            context: button,
            type: 'DELETE',
            url: url,
            data: {session_id: sessionId},
            timeout: 15000,
            beforeSend : function()  {
                button.addClass('disabled');
            },
            success: function(data) {
                var parent = button.closest('.buttons');

                parent.find('.container-button-schedule').fadeIn('slow', function(){
                    $(this).html(data);
                });

                //If we are on the personal schedule, the session should be removed
                var buttonContainer = parent.find('.container-button-schedule');

                if(buttonContainer.hasClass('personal'))
                {
                    //Find the nearest session group
                    var sessionGroup =  buttonContainer.closest('.session-group');

                    //When its only the header for the session group and one session left in that group, remove both
                    //As the view is of this writing, it will be one row for the header and one row for the session item
                    if(sessionGroup.children('.row').length === 2)
                        sessionGroup.fadeOut('slow', function() {
                            $(this).detach();
                        });
                    else
                        buttonContainer.closest('.session').closest('.row').fadeOut('slow', function() {
                            $(this).detach();
                        });
                }
            },
            complete : function() {
                button.removeClass('disabled');
            },
            error: function(request, errorType, errorMessage)
            {
                alert('Oops. Please wait some seconds before trying again.');

            }
        })
    });

    $('.session').on('click', '.button-schedule-add', function(e){
        e.preventDefault();
        var button = $(this);

        //Find URL to resource
        var sessionContainer = button.closest('.session');
        var url = sessionContainer.attr('data-url');
        var sessionId = sessionContainer.attr('data-value');

        console.log(url);
        console.log(sessionId);

        $.ajax({
            type: 'post',
            url: url,
            data: {session_id : sessionId},
            timeout: 15000,
            beforeSend: function() {
                button.addClass('disabled');
            },
            success: function(data) {
                var parent = button.closest('.buttons');

                parent.find('.container-button-schedule').fadeIn('slow', function() {
                    $(this).html(data);
                })
            },
            complete: function() {
                button.removeClass('disabled');
            },
            error: function(request, errorType, errorMessage)
            {
                alert('Oops. Please wait some seconds before trying again.');

            }
        })
    });

    $(".conference-item").on("click", ".button-more", function(){
        //Find the first conference-item up in the DOM tree
        var conferenceItem = $(this).closest('.conference-item');

        //Toggle hidden on the description text
        conferenceItem.find('.description .text').toggleClass('hidden');

        //Find button
        var button = conferenceItem.find('.button-more');

        //Swap glyph on button
        var glyph = button.find('.glyphicon').toggleClass('glyphicon-zoom-in glyphicon-zoom-out');

        //Find the last span inside the button
        var buttonText = button.find('.button-text');

        buttonText.text( buttonText.text() === "Read more" ? 'Close' : "Read more");
    });

    $(".session").on("click", ".button-more", function(){
        //Walk up in the DOM tree
        var parent = $(this).closest('.session');

        //Find the different descriptions and toggle them
        parent.find('.description-long').toggleClass('hidden');
        parent.find('.description-short').toggleClass('hidden');

        var button = parent.find('.button-more span');

        //Swap glyph on button
        button.first().toggleClass('glyphicon-zoom-in glyphicon-zoom-out');

        //Find the last span inside the button
        var buttonText = button.last();

        //Change its text
        buttonText.text( buttonText.text() === "Read more" ? 'Close' : "Read more");

    });

    window.setTimeout(function() {
        $(".alert-info").toggleClass('fadeIn fadeOut').detach();
    }, 60000);

    window.setTimeout(function() {
        $(".alert-danger").toggleClass('fadeIn fadeOut').detach();
    }, 60000);


    $("#dismiss").on("click",  function() {
        var container = $(this).closest('.container-fluid');
        container.detach();
    });
});


(function() {
    $('form[data-remote]').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';

        $.ajax({
            type: method,
            url: form.prop('action'),
            data: form.serialize(),
            success: function(data) {
                var parent = form.closest('.row');

                parent.children().detach();

                parent.fadeOut("slow", function(){
                    var p = $("<div class='col-xs-12 text-center default-heading'> <h4>This session has been rated</h4></div>").show();
                    $(this).append(p);
                    parent.fadeIn(2000);
                });
            }
        })();
    });
})();




/* off-canvas sidebar toggle */
$('[data-toggle=offcanvas]').click(function() {
    $(this).toggleClass('visible-xs text-center');
    $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
    $('.row-offcanvas').toggleClass('active');
    $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
    $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
    $('#btnShow').toggle();
});


/* Function from http://manasbhardwaj.net/get-unique-values-from-a-javascript-array-using-jquery/ */
function GetUnique(inputArray)
{
    var outputArray = [];
    for (var i = 0; i < inputArray.length; i++)
    {
        if ((jQuery.inArray(inputArray[i], outputArray)) == -1)
        {
            outputArray.push(inputArray[i]);
        }
    }
    return outputArray;
}
/*End */


function appendButtons() {
    var days = [];
    var body = $(this).closest('body');

    console.log(body);
    $(".session-group").each(function() {
        var value = $(this).attr('data-value');
        days.push(value);
    });


    var uniqueDays = GetUnique(days);

    var buttonGroup = $('#button-days');


    $.each(uniqueDays, function(index, value) {
        buttonGroup.append("<a href='#' class='btn btn-default conference-button-day' data-value="+ value + ">" + value + "</a>");
    });

    buttonGroup.append("<a href='#' class='btn btn-default conference-button-day' data-value='all'>All </a>");
}

