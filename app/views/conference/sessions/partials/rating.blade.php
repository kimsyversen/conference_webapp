@if($rateable == true)
    <div class="row">
        <!-- Push one column to left -->
        <div class="col-md-1"></div>
        <div class="col-md-10 session-item ">
            <div class="row header">
                <div class="col-xs-2 col-sm-1 avatar">
                    <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 title">
                    <h4> Rate this session</h4>
                </div>
            </div>

            <div class="row">
                <div class="description-long">
                    <p>Here you can give this session a rating and also give comments on it.</p>
                </div>

                <a class="button-link" href="{{ route('rating_path', ['conference_id' => Session::get('conference_id'), 'session_id'  => Session::get('session_id')])}}">
                    <button class="btn button-dark">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Rate here
                    </button>
                </a>
            </div>
        </div>
    </div>
@else
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 session-item text-center">
            <h4><a href="{{ route('login_path') }}">You must authenticate yourself to rate this session</a></h4>
        </div>
    </div>
@endif