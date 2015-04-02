<div class="row toggled" id="advanced-options">
    <div class="padding">
        <div class="col-xs-12 col-md-6">
            <label>{{ Lang::get('event.filter.title-free')  }}</label>
            <input type="text" class="text-input form-control" placeholder="{{ Lang::get('event.filter.title-free')  }}" id="filter" value="" autocomplete="off" />
        </div>
        <div class="col-xs-12 col-md-6 btn-group" aria-label='Days' id="button-days">
            <label style="display:block">{{ Lang::get('event.filter.title-buttons')  }}</label>

            <a href='#' class='btn btn-default conference-button-day' data-value='all'>{{ Lang::get('event.buttons.all-days')  }} </a>
        </div>
    </div>
</div>