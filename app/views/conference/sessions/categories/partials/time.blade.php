<div class="row">
    <div class="col-xs-12 day">
        {{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}
    </div>
    <div class="col-xs-12 month">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}
    </div>

    <div class="col-xs-12 hour">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i') }} -

        {{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i') }}
    </div>
</div>