<div class="row">
    <!-- Push one column to left -->
    <div class="col-md-1"></div>
    <div class="col-md-10 session-item ">
        @if($status == -1)
            @include('conference.sessions.partials.rating_status.status_-1');
        @elseif($status == 0)
            @include('conference.sessions.partials.rating_status.status_0');
        @elseif($status == 1)
            @include('conference.sessions.partials.rating_status.status_1');
        @elseif($status == 2)
            @include('conference.sessions.partials.rating_status.status_2');
        @elseif($status == 3)
            @include('conference.sessions.partials.rating_status.status_3');
        @endif
    </div>
</div>

