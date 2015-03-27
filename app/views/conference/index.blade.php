@extends('conference.layouts.default')
@section('content')
    @include('conference.layouts.components.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
    @include('conference.layouts.partials.errors-and-messages')
    @include('conference.layouts.partials.doFirstTimeStuff')

    @if(isset($data))
        @if(!empty($data))
            @include('conference.layouts.partials.page-header', ['text' => 'Browse conferences'])
            @include('conference.layouts.partials.conference', ['data' =>  $data])
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