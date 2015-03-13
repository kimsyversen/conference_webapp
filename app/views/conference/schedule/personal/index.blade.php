@extends('layouts.default')
@section('content')
    <div class="container ">
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('personal_schedule') ])
        @include('layouts.partials.errors-and-messages')

        <!-- Heading -->
        @include('layouts.partials.page-header', ['text' => 'Personal schedule'])

        @unless(Session::has('errors'))

            @include('conference.partials.delimiter', ['text' => 'Session information', 'value' => ''])

            <!-- Parse each group-->
            @foreach($data['data'] as $sessionGroup)
                @include('conference.partials.delimiter', ['text' => 'Sessions starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

                <!-- A session element -->
                @foreach($sessionGroup['sessions'] as $session)
                    @include('conference.sessions.partials.session', ['session' => $session])
                @endforeach
            @endforeach

        @endunless
    </div>
@stop