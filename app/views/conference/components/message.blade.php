<div class="message  {{ $classes }}">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-12">
                    <div class="glyph">
                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                    </div>
                    <div class="title">
                        <h3 class="panel-title"> {{ $title }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="time">
                        {{ ConferenceHelper::timeStampToHuman($time) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="body">
                        {{ $body }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>