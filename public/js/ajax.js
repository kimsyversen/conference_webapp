(function() {

    $('form[data-remote]').on('submit', function(e) {
/*        e.preventDefault();

        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';

        $.ajax({
            type: method,
            url: form.prop('action'),
            data: form.serialize(),
            success: function(data) {
                e.preventDefault();

                *//* Oppdater rating-elementet her
                 *//*
                var parent = form.parent();

                parent.children().empty();

                parent.append("<div>" +
                "You just rated this session with " + data.value +

                "</div>");


            }

        })();

        e.preventDefault();*/
    });

})();

