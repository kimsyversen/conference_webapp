@extends('layouts.default')
@section('content')
    <div class="container ">
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('personal_schedule') ])
        @include('layouts.partials.errors-and-messages')

        <!-- Heading -->
        @include('layouts.partials.page-header', ['text' => 'Personal schedule'])

        @unless(Session::has('errors'))
            <div class='row'>
               <p>Personal schedule is coming here!</p>
            </div>
        @endunless
    </div>
@stop