@if(Session::has('has_visited_before'))
    <script>
        $(document).ready(function(){
            BootstrapDialog.show({
                title: 'Hello, user',
                description: 'Short about the features of this application',
                message: function(dialog) {
                    var $message = $('<div></div>');
                    var pageToLoad = dialog.getData('pageToLoad');
                    $message.load(pageToLoad);

                    return $message;
                },
                buttons: [{
                    label: 'Close',
                    action: function(dialogItself){
                        dialogItself.close();
                    }
                }],
                data: {
                    'pageToLoad': '/featuresm'
                }
            });
        });
    </script>
    <?php Session::forget('has_visited_before') ?>
@else
    <script> $(document).ready(function(){ addToHomescreen(); }); </script>
@endif