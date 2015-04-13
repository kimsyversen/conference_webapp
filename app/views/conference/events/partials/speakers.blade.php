@foreach($speakers as $speaker)
<div class="container-fluid rating-item" style="margin-top:1em;">
    <div class="row">
        <div class="col-xs-12 col-md-offset-3 col-md-6">
                <div class="speaker text-center" style="margin-top:1em;">
                    <div class="header ">
                        <span class="glyphicon glyphicon-user" style="font-size:3em;"></span>
                        <ul class="list-unstyled">
                            <li style="font-size:1.3em;">{{ $speaker['first_name'] }} {{ $speaker['last_name'] }}</li>
                            <li> {{ $speaker['title'] }},  {{ $speaker['affiliation'] }}</li>
                        </ul>
                    </div>
                    <div class="body">
                        <i>{{ $speaker['description'] }} </i>
                    </div>
                </div>
        </div>
    </div>
</div>
@endforeach