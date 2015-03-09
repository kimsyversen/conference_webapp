$(document).ready(function(){

    $(".description").on("click", "button", function(){

        var isHidden = $(this).parent().find('.text').hasClass('hidden');
        var parent = $(this).parent().find('.text');

       if(isHidden)
            parent.removeClass('hidden');
        else
            parent.addClass('hidden');
    });
});
