<div class="row">
    <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 rating-item">
        @if($status == -1)
            @include('conference.sessions.partials.rating_status.status_-1')
        @elseif($status == 0)
            @include('conference.sessions.partials.rating_status.status_0')
        @elseif($status == 1)
            @include('conference.sessions.partials.rating_status.status_1')
        @elseif($status == 2)
            @include('conference.sessions.partials.rating_status.status_2')
        @elseif($status == 3)
            @include('conference.sessions.partials.rating_status.status_3')
        @endif
    </div>
</div>
