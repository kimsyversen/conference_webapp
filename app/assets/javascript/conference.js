$(document).ready(function(){

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
    }, 30000);

    window.setTimeout(function() {
        $(".alert-danger").toggleClass('fadeIn fadeOut').detach();
    }, 30000);


    $(".login-button").on("click", function() {
        BootstrapDialog.show({
            title: 'Login',
            description: 'Login to your account',
            message: function(dialog) {
                var $message = $('<div></div>');
                var pageToLoad = dialog.getData('pageToLoad');
                $message.load(pageToLoad);

                return $message;
            },
            data: {
                'pageToLoad': '/loginmodal'
            }
        });
    });


    $(".register-button").on("click",  function() {
        BootstrapDialog.show({
            title: 'Register',
            description: 'Register a new account',
            message: function(dialog) {
                var $message = $('<div></div>');
                var pageToLoad = dialog.getData('pageToLoad');
                $message.load(pageToLoad);

                return $message;
            },
            data: {
                'pageToLoad': '/registermodal'
            }
        });
    });

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



/*Start  JS from http://www.bootstrapzero.com/bootstrap-template/facebook */

/* off-canvas sidebar toggle */

$('[data-toggle=offcanvas]').click(function() {
    $(this).toggleClass('visible-xs text-center');
    $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
    $('.row-offcanvas').toggleClass('active');
    $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
    $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
    $('#btnShow').toggle();
});

/*End */