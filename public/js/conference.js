$(document).ready(function(){
    $('.session-item').on('click', '#remove-from-schedule', function(e){
        e.preventDefault();
        console.log(e);

        var button = $(this);

        //Find URL to resource
        var url = button.closest('.session-item').find('.header').find('.title h4 a').attr('href');

        var sessionId = button.attr('value');

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
                        buttonContainer.closest('.session-item').closest('.row').fadeOut('slow', function() {
                            $(this).detach();
                        });
                }
            },
            complete : function() {
                button.removeClass('disabled');
            },
            error: function(request, errorType, errorMessage)
            {
                alert(errorMessage);

            }
        })
    });

    $('.session-item').on('click', '#add-to-schedule', function(e){
      e.preventDefault();

        var button = $(this);

        //Find URL to resource
        var url = button.closest('.session-item').find('.header').find('.title h4 a').attr('href');
        var sessionId = button.attr('value');

        console.log(url);

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
               // parent.find('.container-button-schedule').html(data);

                parent.find('.container-button-schedule').fadeIn('slow', function() {
                    $(this).html(data);
                })
            },
            complete: function() {
                button.removeClass('disabled');
            },
            error: function(request, errorType, errorMessage)
            {
                //TODO: Flash error message?
                alert(errorMessage);
               // alert("Seems like the session is already in your schedule");
            }
        })
    });

    $(".conference-item").on("click", "#button-conference-more", function(){

        //Find conference-item DOM element
        var conferenceItem = $(this).parent().parent().parent();

        //Find button
        var button = conferenceItem.find('button');

        //Toggle hidden on the description text
        conferenceItem.find('.description .text').toggleClass('hidden');

        //Change text on the button
        button.text( button.text() === "Read more" ? 'Close' : "Read more");
    });

    $(".session-item").on("click", "#button-session-more", function(){
        //Walk up in the DOM tree
        var parent = $(this).parent().parent().parent();

        //Find the different descriptions and toggle them
        parent.find('.description-long').toggleClass('hidden');
        parent.find('.description-short').toggleClass('hidden');


        var button = parent.find('.button-more span');

        //Swap glyph on button
        button.first().toggleClass('glyphicon-zoom-in glyphicon-zoom-out');

        //Find the last span inside the button
        var buttonText = button.last();

        //Change its text
        buttonText.text( buttonText.text() === "Read more" ? 'Read less' : "Read more");

    });


   window.setTimeout(function() {
       $(".alert-info").toggleClass('fadeIn fadeOut').detach();
    }, 5000);

    window.setTimeout(function() {
        $(".alert-danger").toggleClass('fadeIn fadeOut').detach();
    }, 5000);


    $("#button-login").on("click",  function(){


    });

});