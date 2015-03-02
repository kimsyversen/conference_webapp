@if(Session::has('messages'))
<?php $messages = Session::get('messages'); ?>
    <div class="alert alert-success">
        <ul>
            @foreach($messages as $message)
                {{ $message }}
            @endforeach
        </ul>
    </div>
@endif


