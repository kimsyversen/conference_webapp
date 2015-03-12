(function() {

    $('form[data-remote]').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
        var url = form.prop('action');

        $.ajax({
            type: method,
            url: form.prop('action'),
            data: form.serialize(),
            success: function(data) {
                e.preventDefault();
                alert('Success');

               form.remove();
                var descriptionLong = form.closest('.description-long');
                descriptionLong.children().empty();

                descriptionLong.append("<div>" + "This session has been rated with the score  " + data.value +  "</div>");

            }
        })();
        e.preventDefault();
    });

     $('#initialize-rating').click(function(e){
          e.preventDefault();

          $.get('/ajax/user_get_rating', function(data)
          {
              if(data == -1)
                $('.status--1').removeClass('hidden');
              if(data == 0)
                  $('.status-0').removeClass('hidden');
              if(data == 1)
                  $('.status-1').removeClass('hidden');
              if(data == 2)
                  $('.status-2').removeClass('hidden');
              if(data == 3)
                  $('.status-3').removeClass('hidden');

              //If we can use view::make in the controller, this can be used and rest can be removed
              //$('.rating-div').append(data);
          });
      });

    $('#initialize-rating').click();

})();

