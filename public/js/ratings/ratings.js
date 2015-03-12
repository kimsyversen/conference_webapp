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

          $.get('/ajax/see_if_user_has_rated', function(data)
          {
              var status = data;

              alert(status);

              //If user must be authenticated
              if(status == -1)
                  $(".user-must-be-authenticated").removeClass('hidden');
              //If user can rate the session
              if(status == 0)
                  $(".user-can-rate").removeClass('hidden');
              //Session does not belongs to conference. This should not happen. Ever.
              if(status == 1)
                  $(".session-does-not-belong-to-conference").removeClass('hidden');
              //Session has not ended
              if(status == 2)
                  $(".user-session-must-end").removeClass('hidden');
              if(status == 3)
                  $(".user-already-rated").removeClass('hidden');


          });
      });

    $('#initialize-rating').click();

})();

