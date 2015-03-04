@if(Session::has('response'))
    <?php $response = Session::get('response'); ?>

    @if(isset($response['errors']))
        <div class="alert alert-danger">
            <ul>
                @foreach($response['errors'] as $errorsArray)
                    @foreach($errorsArray  as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    @endif
@endif

