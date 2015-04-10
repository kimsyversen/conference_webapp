<div class="site-notice">
    <div class="alert alert-warning alert-dismissible animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="bell animated flash">
            <i class="glyphicon glyphicon-bell"></i>
        </div>
        <div>
            <p> {{ Lang::get('firstvisit.firsttimestuff.message') }}
                <a class="alert-link" href="{{ route('featurette_path')}}"> {{ Lang::get('firstvisit.firsttimestuff.link') }} </a>
            </p>
        </div>
    </div>
</div>