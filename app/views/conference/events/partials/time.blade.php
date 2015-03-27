<div class="row visible-xs">
    <div class=" col-xs-12 day text-center">
        {{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}
    </div>
    <div class="col-xs-12 hour text-center">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i') }}-{{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i') }}
    </div>
</div>

<div class="row visible-sm visible-md ">
    <div class="col-xs-12 day text-center">
        {{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}
    </div>
    <div class="col-xs-12 month text-center">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}
    </div>
    <div class="col-xs-12 hour text-center">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i') }}-{{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i') }}
    </div>
</div>


<div class="row visible-lg ">
    <div class="col-xs-12 day text-center">
        {{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}
    </div>
    <div class="col-xs-12 hour text-center">
        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i') }}-{{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i') }}
    </div>
</div>



