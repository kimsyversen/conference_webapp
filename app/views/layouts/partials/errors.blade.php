@if(Session::has('errors'))
        <div class="alert alert-danger in">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3>Oops!</h3>
            <ul>
                @foreach(Session::get('errors') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif


