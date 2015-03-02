@if(Session::has('response'))
    <?php $response = Session::get('response'); ?>
    {{ dd($response) }}
    @if(isset($response['error']))
        {{ $response['error'] }}
    @endif
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

