@extends('conference.layouts.default')
@section('content')

    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('personal_schedule') ])
    @include('conference.layouts.partials.errors-and-messages')

    <!-- Heading -->
    @include('conference.layouts.partials.page-header', ['text' => 'Personal schedule'])

    @if(isset($data['data']))
        @if(!empty($data['data']))
            @include('conference.sessions.partials.group', ['sessionGroup' => $data['data'], 'schedule_type' => 'personal'])
        @else
            <p class="lead text-center">Your personal schedule is empty.</p>
        @endif
    @endif

@stop

<script>
    $(document).ready(function() {
        $("#button-session-more").trigger("click");
    });
</script>