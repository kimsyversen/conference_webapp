@foreach($response as $conference)
    <div class="col-md-4">
        <div class="panel panel-default">
            <h3><a href="{{ $conference['link']['uri'] }} " rel="{{ $conference['link']['rel']  }}"> {{ $conference['name'] }}</a></h3>

            <div class="panel-body">
                This conference begin in {{ Carbon\Carbon::createFromTimestamp(strtotime($conference['begins']))->diffForHumans() }}
            </div>
        </div>
    </div>
@endforeach