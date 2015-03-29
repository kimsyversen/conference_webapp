@extends('conference.layouts.default')
@section('content')
    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
    @include('conference.layouts.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    {{--<a class="alert-link" href="{{ route('featurette_path')}}">Give me a short presentation</a></p>--}}
   {{-- @include('conference.partials.doFirstTimeStuff', ['text' => 'Hi! This is a message that you will only see the first time you visit this application. Do you want a short presentation of the features of this application? If not, you can always see the presentation again. Just scroll to the bottom of the page and click on "Features of this application".'])--}}

    @if(isset($data))
        @if(!empty($data))
            @include('conference.layouts.partials.page-header', ['text' => 'Browse conferences'])
            @include('conference.partials.conference', ['data' =>  $data])
        @else
            <p class="lead">There are currently no conferences here.</p>
        @endif
    @endif
@stop

@section('javascript')
    @parent
    {{ HTML::script('js/addtohomescreen.min.js') }}
    <script> $(document).ready(function(){ addToHomescreen(); }); </script>

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
@stop