@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Profile</h1>

            @include('layouts.partials.errors')

            <?php $data = $response['data']; ?>

            <p>Email {{ $data['email'] }}</p>



            <h2>Token information</h2>
            <div>
                @if($access_token)

                    <p>Access token: {{$access_token['access_token']}} </p>
                    <p>Token type: {{ $access_token['token_type']}} </p>
                    <p>Expires in: {{ $access_token['expires_in']}} </p>
                    <p>Expires at: {{ $access_token['expires_at']}} </p>
                @endif
            </div>

        </div>
    </div>
@stop