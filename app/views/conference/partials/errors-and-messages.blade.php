<div class="container-fluid">
    <div class="row">
        <div class='col-xs-12'>
            @include('conference.partials.errors')
        </div>
    </div>
    <div class="row">
        <div class='col-xs-12'>
            @include('conference.partials.messages')
        </div>
    </div>
</div>

@if(Session::has('success'))
    @include('conference.partials.alerts.success', ['success' => Session::get('success')])
@endif

@if(Session::has('info'))
    @include('conference.partials.alerts.info', ['info' => Session::get('info')])
@endif


@if(Session::has('danger'))
    @include('conference.partials.alerts.danger', ['danger' => Session::get('danger')])
@endif

@if(Session::has('warning'))
    @include('conference.partials.alerts.warning', ['warning' => Session::get('warning')])
@endif