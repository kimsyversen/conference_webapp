<div class="site-notice">
    <div class="alert alert-info alert-dismissible animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="exclamation animated flash">
            <i class="fa fa-exclamation-circle"></i>
        </div>
        <div>
            <p> {{ Lang::get('firstvisit.firsttimestuff.message') }}
                <a class="alert-link" href="{{ route('featurette_path')}}"> {{ Lang::get('firstvisit.firsttimestuff.link') }} </a>
            </p>
        </div>
    </div>
</div>