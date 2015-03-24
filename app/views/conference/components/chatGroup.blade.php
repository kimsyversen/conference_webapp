<div class="row">
    <div class="col-xs-12 text-center chat-intro-text">
        <h5 class="text-muted">Last activitiy {{ ConferenceHelper::timeStampToHuman($last_message_date) }} by {{ $last_message_by }}</h5>
    </div>
</div>

<div class="row">
    <div class="col-xs-1 col-md-2"></div>

    <div class="col-xs-10 col-md-8 chat-group">
        <div class="row">
            <div class="col-xs-2 col-sm-2 chat-avatar">
                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
            </div>
            <div class="col-xs-10 col-sm-10 chat-title">
                <h4 class="panel-title"> From <a href="/{{$uri}}"> {{ $title }}</a> </h4>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-2 col-sm-2 chat-avatar">

            </div>
            <div class="col-xs-8 col-sm-10 chat-title">
                <a href="/{{$uri}}" style="text-decoration:none;"> <span class="text-muted">Last message:</span> {{ConferenceHelper::getShortDescription($last_message, 8) }}...</a>
            </div>
        </div>
    </div>
</div>

