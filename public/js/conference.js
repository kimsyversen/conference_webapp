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

        if(description_long.hasClass('hidden')) {
            parent.find('.description-short').addClass('hidden');
            description_long.removeClass('hidden');

            button.empty();
            button.append("<span class='glyphicon glyphicon glyphicon glyphicon-calendar' aria-hidden='true'></span> Read less");
        }
        else
        {
            parent.find('.description-short').removeClass('hidden');
            description_long.addClass('hidden');

            button.empty();
            button.append("<span class='glyphicon glyphicon glyphicon glyphicon-calendar' aria-hidden='true'></span> Read more");

        }
    });




});