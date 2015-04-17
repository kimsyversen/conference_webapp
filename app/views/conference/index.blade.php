@extends('conference.layouts.default')

<script>
    $(document).ready(function() {
        addToHomescreen();
    });
</script>

@section('content')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    @if(isset($data))
        @if(!empty($data))
            @include('conference.partials.page-header', ['text' => Lang::get('conference.title')])
            @include('conference.partials.conference', ['data' =>  $data])
        @else
            <p class="lead"> {{ Lang::get('conference.not-available') }}</p>
        @endif
    @endif
@stop



