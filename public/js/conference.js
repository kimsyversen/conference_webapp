$(document).ready(function(){
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
            button.append("<span class='glyphicon glyphicon glyphicon glyphicon-calendar' aria-hidden='true'></span> Read less");
        }
        else
        {
       /*     parent.find('.description-short').removeClass('hidden').slideDown('slow');

            description_long.addClass('hidden').slideUp('slow');*/

            button.empty();
            button.append("<span class='glyphicon glyphicon glyphicon glyphicon-calendar' aria-hidden='true'></span> Read more");

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


});