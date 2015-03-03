@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Profile</h1>

            @include('layouts.partials.errors')

            @foreach($response as $key => $value)
                <p>
                    {{ $key }} : {{ $value }}
                </p>
            @endforeach

            <h2>Token information</h2>
            <div>
                @if($access_token)

                    <p>Access token: {{$access_token['access_token']}} </p>
                    <p>Token type: {{ $access_token['token_type']}} </p>
                    <p>Expires in: {{ $access_token['expires_in']}} </p>
                    <p>Expires at: {{ $access_token['expires_at']}} </p>
                @endif
            </div>

            <div>
                 <?php echo "Session Lifetime:"  . Config::get('session.lifetime') . PHP_EOL; ?>
            </div>
        </div>
    </div>
@stop