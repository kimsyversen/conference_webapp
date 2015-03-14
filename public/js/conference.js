$(document).ready(function(){



   $('.session-item').on('click', '#add-to-schedule', function(e){
      e.preventDefault();

        var button = $(this);

        //Find URL to resource
        var url = button.closest('.session-item').find('.header').find('.title h4 a').attr('href'); //.find('h4 a').attr('href');


        var sessionId = button.attr('value');
        console.log(url);

        $.ajax({
            type: 'post',
            url: url,
            data: {session_id: sessionId},
            success: function(data) {
                alert(data);

                //TODO: Change button

                //TODO: Insert notification?
            },
            error: function(data)
            {
                console.log('Error!!!');
            }
        })
    });

    $(".description").on("click", "button", function(){
        var isHidden = $(this).parent().find('.text').hasClass('hidden');
        var parent = $(this).parent().find('.text');

       if(isHidden)
            parent.removeClass('hidden');
        else
            parent.addClass('hidden');
    });

    $(".button-more").on("click", function(){
        var parent = $(this).parent().parent().parent();
        var description_long = parent.find('.description-long');
        var button = parent.find('.button-more');

        description_long.toggleClass('hidden');

        if(description_long.hasClass('hidden')) {
/*            parent.find('.description-short').addClass('hidden');
            description_long.removeClass('hidden');*/

            button.empty();
            button.append("<span class='glyphicon glyphicon glyphicon glyphicon-calendar' aria-hidden='true'></span> Read more");
        }
        else
        {
       /*     parent.find('.description-short').removeClass('hidden').slideDown('slow');

            description_long.addClass('hidden').slideUp('slow');*/

            button.empty();
            button.append("<span class='glyphicon glyphicon glyphicon glyphicon-calendar' aria-hidden='true'></span> Read less");

        }
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