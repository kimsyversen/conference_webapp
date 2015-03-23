<div class="row">
    <div class="chat-message">
        <div class="col-md-2"></div>
        <div class="col-xs-3 col-sm-2 col-md-3">
            <div class="chat-user">
                {{( $user )}}
            </div>
        </div>
        <div class="col-xs-9 col-sm-10 col-md-6">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <span class="text-muted">{{ ConferenceHelper::formatTimestamp($time, 'D H:i:s') }}</span>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="bubble">
                        <p>{{ $message }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



