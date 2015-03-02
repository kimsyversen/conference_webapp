@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @include('layouts.partials.errors')

            @unless(!isset($user['data']))
                <?php $user = $user['data']; ?>
                <h1>Edit</h1>


                {{ Form::open([ 'route' => ['edit_path', Session::get('email')], 'method' => 'post']) }}

                <div class="form-group">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title', $user['title'], ['class' => 'form-control' ]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('country', 'Country:') }}
                    {{ Form::text('country',  $user['country'], ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('username', 'Username:') }}
                    {{ Form::text('username', $user['username'], ['class' => 'form-control' ]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', $user['email'], ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('first_name', 'First Name:') }}
                    {{ Form::text('first_name', $user['first_name'], ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('last_name', 'Last Name:') }}
                    {{ Form::text('last_name', $user['last_name'], ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Update profile', ['class' => 'btn btn-primary form-control']) }}
                </div>

                {{ Form::close() }}

            @endunless
        </div>
    </div>

@stop