@if(Session::has('has_visited_before'))
    <div id="receiver"></div>
    <script>
        $(document).ready(function(){
            $('#receiver').click();
        });
    </script>
    <?php Session::forget('has_visited_before') ?>
@else
 {{--   <script> $(document).ready(function(){ addToHomescreen(); }); </script>--}}
@endif