@if(Session::get('has_visited_before'))
    <div id="receiver"></div>
    <script>
        $(document).ready(function(){
            $('#receiver').click();
        });
    </script>
    <?php Session::forget('has_visited_before') ?>
@endif