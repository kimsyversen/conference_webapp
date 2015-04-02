
$(document).ready(function(){
    $(document).on('click', '#show-options-link', function(){
        $('#advanced-options').toggleClass('toggle toggled');
        appendButtons();
    });


    $(document).on('click', '.options .close', function(){
   /* $(".options").on('click', '.close', function() {*/
        var body = $('body');
        var advanced = body.find('#advanced-options');
        advanced.toggleClass('toggled');
        $(this).find('span').toggleClass('glyphicon-menu-down glyphicon-menu-up');
    });


    $(document).on('click', '#frm-language .dropdown-menu li', function(e){
        var data = $(this).attr('data-value');

        var form = $(this).closest('#frm-language');
        var method = form.attr('method');
        var url = form.attr('action');

        $.ajax({
            type: method,
            url: url,
            data: {'language' : data},
            success: function (d) {

            },
            error: function(request, errorType, errorMessage) {
                alert(errorMessage);
            }
        });
    });



    /** Footer to bottom */
    var pageHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < pageHeight) {
        $('#footer').css('margin-top', (pageHeight - footerTop) + 'px');
    }


        FastClick.attach(document.body);


    $(document).on('click', '.conference-button-day', function(e){
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
    $(document).on('keyup', '#filter', function(){
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
        else {
            $("#filter-count").empty();
        }

    });

    $(document).on('click', '.button-schedule-remove', function(e){
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

    $(document).on('click', '.button-schedule-add', function(e){
   /* $('.session').on('click', '.button-schedule-add', function(e){*/
        e.preventDefault();
        var button = $(this);

        //Find URL to resource
        var sessionContainer = button.closest('.session');
        var url = sessionContainer.attr('data-url');
        var sessionId = sessionContainer.attr('data-value');


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

    $(document).on('click', '.conference-item .button-more', function(e){
        //Find the first conference-item up in the DOM tree
        var conferenceItem = $(this).closest('.conference-item');

        //Toggle hidden on the description text
        conferenceItem.find('.description .text').toggleClass('hidden');

        //Find button
        var button = conferenceItem.find('.button-more');

        //Swap glyph on button
        button.find('.glyphicon').toggleClass('glyphicon-zoom-in glyphicon-zoom-out');

        //Find the last span inside the button
        var buttonText = button.find('.button-text');


        buttonText.text( buttonText.text() === Uninett.button.more ? Uninett.button.close : Uninett.button.more);
    });

    $(document).on("click", ".session .button-more", function(){
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

        buttonText.text( buttonText.text() === Uninett.button.more ? Uninett.button.close: Uninett.button.more);

    });

    window.setTimeout(function() {
        $(".alert-info").toggleClass('fadeIn fadeOut').detach();
    }, 60000);

    window.setTimeout(function() {
        $(".alert-danger").toggleClass('fadeIn fadeOut').detach();
    }, 60000);


    $(document).on("click", '#dismiss',  function() {
        var container = $(this).closest('.container-fluid');
        container.detach();
    });

    $(document).on('submit', 'form#frm-rating', function(e){
 /*   $('form[data-remote]').on('submit', function(e) {*/
        e.preventDefault();
        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';

        $.ajax({
            type: method,
            url: form.prop('action'),
            dataType: 'html',
            data: form.serialize(),
            success: function(data) {
                var parent = form.closest('.row');
                parent.children().detach();
                parent.fadeOut("fast", function(){
                    $(this).append(data);
                    parent.fadeIn(2000);
                });
            }
        });
    });

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

    $(".session-group").each(function() {
        var value = $(this).attr('data-value');
        days.push(value);
    });

    var uniqueDays = GetUnique(days);
    var buttonGroup = $('#button-days');

    $.each(uniqueDays, function(index, value) {
        buttonGroup.append("<a href='#' class='btn btn-default conference-button-day' data-value="+ value + ">" + value + "</a>");
    });
}


