@extends('layouts.default')
@section('content')
    <div class="container ">
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('layouts.partials.errors-and-messages')

        <!-- Heading -->
        @include('layouts.partials.page-header', ['text' => 'Schedule'])


        @unless(Session::has('errors'))
            <div class='row'>
                <!-- Parse each group-->
                @foreach($data['data'] as $sessionGroup)
                    @include('conference.partials.delimiter', ['text' => 'Sessions starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

                    <!-- A session element -->
                    @foreach($sessionGroup['sessions'] as $session)
                        @include('conference.sessions.partials.session', ['session' => $session])
                    @endforeach

                @endforeach
            </div>
        @endunless
    </div>
@stop





