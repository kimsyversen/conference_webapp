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
                form.remove();

                var descriptionLong = $('.rating-description');
/*                descriptionLong.empty();
                descriptionLong.append("<div>This session has been rated</div>");*/

                descriptionLong.empty();
                descriptionLong.fadeOut("slow", function(){
                    var p = $("<p>This session has been rated</p>").show();
                    $(this).append(p);
                    descriptionLong.fadeIn(2000);
                });
            }
        })();

    });
})();

