<div class="container-fluid rating-item">
    <div class="row">
        <div class="col-xs-12 ">
            @if($status == -1)
                @include('conference.events.partials.rating.status.-1')
            @elseif($status == 0)
                @include('conference.events.partials.rating.status.0')
            @elseif($status == 1)
                @include('conference.events.partials.rating.status.1')
            @elseif($status == 2)
                @include('conference.events.partials.rating.status.2')
            @elseif($status == 3)
                @include('conference.events.partials.rating.status.3')
            @endif
        </div>
    </div>
</div>



