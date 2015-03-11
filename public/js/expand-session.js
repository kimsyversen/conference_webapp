
$(document).ready(function(){
    var sessionItem = $(this).find('.session-item');

    sessionItem.find('.description-long').addClass('hidden');
    sessionItem.find('.description-long').removeClass('hidden');

    var button = sessionItem.find('.button-more');

    sessionItem.find('.button-more-parent').remove();

    var scheduleButton = sessionItem.find('.button-schedule');

    scheduleButton.removeClass('with-border');
    scheduleButton.parent().removeClass('col-xs-6').addClass('col-xs-12');
});

