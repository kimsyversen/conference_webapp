<div class="container-fluid">
    <div class="row">
        <div class='col-xs-12'>
            @include('conference.layouts.partials.errors')
        </div>
    </div>
    <div class="row">
        <div class='col-xs-12'>
            @include('conference.layouts.partials.messages')
        </div>
    </div>
</div>

@if(Session::has('success'))
    @include('conference.layouts.partials.alerts.success', ['success' => Session::get('success')])
@endif

@if(Session::has('info'))
    @include('conference.layouts.partials.alerts.info', ['info' => Session::get('info')])
@endif


@if(Session::has('danger'))
    @include('conference.layouts.partials.alerts.danger', ['danger' => Session::get('danger')])
@endif

@if(Session::has('warning'))
    @include('conference.layouts.partials.alerts.warning', ['warning' => Session::get('warning')])
@endif