$(document).ready(function(){
    $('.session-item').on('click', '#remove-from-schedule', function(e){
        e.preventDefault();
        console.log(e);

        var button = $(this);

        //Find URL to resource
        var url = button.closest('.session-item').find('.header').find('.title h4 a').attr('href');

        var sessionId = button.attr('value');

        $.ajax({
            type: 'DELETE',
            url: url,
            data: {session_id: sessionId},
            timeout: 15000,

            success: function(data) {
                console.log("Try to destroy ");
                var parent = button.closest('.buttons');
                parent.find('.container-button-schedule').html(data);
            },
            error: function(request, errorType, errorMessage)
            {
                alert(errorMessage);
                console.log(errorMessage);
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
                alert('Starting to add to schedule');
            },
            success: function(data) {
                var parent = button.closest('.buttons');
                parent.find('.container-button-schedule').html(data);
            },
            complete: function() {
                alert('Finished adding to schedule');
            },
            error: function(request, errorType, errorMessage)
            {
                //TODO: Flash error message?
                alert("Seems like the session is already in your schedule");
            }
        })
    });

    $(".conference-item").on("click", "button", function(){

        //Find conference-item DOM element
        var conferenceItem = $(this).parent().parent().parent();

        //Find button
        var button = conferenceItem.find('.button-more-conference');

        //Toggle hidden on the description text
        conferenceItem.find('.description .text').toggleClass('hidden');

        //Change text on the button
        button.text( button.text() === "Read about the conference" ? 'Close' : "Read about the conference");
    });

    $(".button-more").on("click", function(){
        //Walk up in the DOM tree
        var parent = $(this).parent().parent().parent();

        //Find the different descriptions and toggle them
        parent.find('.description-long').toggleClass('hidden');
        parent.find('.description-short').toggleClass('hidden');

        //Find the last span inside the button
        var buttonText = parent.find('.button-more span').last();

        //Change its text
        buttonText.text( buttonText.text() === "Read more" ? 'Read less' : "Read more");

    });


   window.setTimeout(function() {
        $(".alert-info").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 5000);

    window.setTimeout(function() {
        $(".alert-info").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 5000);




/*Snippet borrowed from Lasse Brudeskar Vikås*/
/*    $('#btn-rating').click(function() {
        var el = $('#info'),
            time = 500,
            replaceText = '<p>It has been submitted</p>';

        replaceFade(el, time, replaceText);
    });

    function replaceFade(el, time, replaceText) {
        var fullOpacityHeight = el.height() / 2;
        var timeToFullOpacity = time * 0.5;

        el.animate({
            opacity: 0,
            height: fullOpacityHeight
        }, {
            duration: timeToFullOpacity,
            easing: 'linear',
            complete: function() {
                var emptied = false,
                    filled = false;
                el.animate({
                    opacity: 1,
                    height: '40px'
                }, {
                    step: function(now) {
                        if (!emptied && now < 0.75) {
                            el.empty();
                            emptied = true;
                        }

                        if (!filled && now < 0.25) {
                            el.append(replaceText);
                            filled = true;
                        }
                    },
                    easing: 'linear',
                    duration: time - timeToFullOpacity
                });
            }
        });
    }*/

});