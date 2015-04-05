@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    @include('conference.partials.alerts.danger')
    @include('conference.partials.alerts.info')
    @include('conference.partials.alerts.success')
    @include('conference.partials.alerts.warning')
    @include('conference.partials.alerts.firstvisit')

    <div class="container">
        <div class="row  text-center">
            <h1>Font awesome</h1>
            <div class="col-xs-12">
                <i class="fa fa-github"></i>
                <i class="fa fa-beer fa-lg"></i>
            </div>

            <div class="col-xs-12 text-center ">
                <h1>Star rating</h1>
                <div id="event-rating" class="rating-item" style="font-size: 2.5em;">
                    <span data-value="5">☆</span>
                    <span data-value="4">☆</span>
                    <span data-value="3">☆</span>
                    <span data-value="2">☆</span>
                    <span data-value="1">☆</span>
                </div>
            </div>
        </div>
    </div>
@stop


<script>
    $(document).on('click', '#event-rating span', function(){
        alert('funka');
    });
    $(document).ready(function() {
        alert('funka');
        /*        $('#event-rating').on('click', function(){

         var stars =  $(this).length;

         alert(stars);
         });*/
    });
</script>


