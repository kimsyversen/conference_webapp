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
                e.preventDefault();

                form.remove();

                var descriptionLong = form.closest('.description-long');

                descriptionLong.children().empty();

                descriptionLong.append("<div>" +
                "This session has been rated with the score  " + data.value +

                "</div>");

            }
        })();
        e.preventDefault();
    });


    $('#initialize-rating').click(function(e){
        e.preventDefault();

        $.get('/conferences/" + conference_id  +  "/sessions/" +  session_id +  "/rate', function(data)
        {
            determineRateElement(data['data']['rateable']);
        });
    });

    function determineRateElement(rateable) {
        if(rateable === true)
            $(".user-can-rate").removeClass('hidden');
        else
            $(".user-not-rate").removeClass('hidden');
    }



    $('#initialize-rating').click();
})();

