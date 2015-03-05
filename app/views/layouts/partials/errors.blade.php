@if(Session::has('errors'))
        <div class="alert alert-danger">
            <h3>Oops!</h3>
            <ul>
                @foreach(Session::get('errors') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif


