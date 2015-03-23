<div class="row">
    <!-- Push one column to left -->
    <div class="col-sm-1 col-md-1"></div>
    <div class="col-sm-10 col-md-10 session-item rating-item">
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
