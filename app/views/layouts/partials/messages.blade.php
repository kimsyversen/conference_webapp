@if(Session::has('messages'))
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach(Session::get('messages') as $message)
                {{ $message }}
            @endforeach
        </ul>

    </div>
@endif


