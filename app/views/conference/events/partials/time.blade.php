<div class="row">
    <div class="visible-xs col-xs-12 day text-center">
        {{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}
    </div>

    <div class="visible-xs col-xs-12 hour text-center">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i') }} -

        {{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i') }}
    </div>

    <div class="hidden-xs col-xs-12 day text-center">
        {{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}
    </div>

    <div class="hidden-xs col-xs-12 month text-center">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}
    </div>

    <div class="hidden-xs col-xs-12 hour text-center">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i') }}-{{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i') }}
    </div>

</div>
