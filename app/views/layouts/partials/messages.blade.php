@if(Session::has('messages'))
    <div class="alert alert-info">
        <ul>
            @foreach(Session::get('messages') as $message)
                {{ $message }}
            @endforeach
        </ul>
    </div>
@endif


