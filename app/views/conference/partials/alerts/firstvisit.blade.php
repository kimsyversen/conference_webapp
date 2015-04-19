<div class="site-notice">
{{--    <div class="alert alert-info alert-dismissible animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="bell animated flash">
            <i class="glyphicon glyphicon-bell"></i>
        </div>
        <div>
            <p> {{ Lang::get('firstvisit.firsttimestuff.message') }}
                <a class="alert-link" href="{{ route('featurette_path')}}"> {{ Lang::get('firstvisit.firsttimestuff.link') }} </a>
            </p>
        </div>
    </div>--}}


    <div class="alert alert-danger alert-dismissible animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="bell animated flash">
            <i class="glyphicon glyphicon-bell"></i>
        </div>
        <div class="message">
            <p> {{ Lang::get('firstvisit.firsttimestuff.guidelines.message') }} <a class="alert-link" href="{{ route('guideline_path') }}">{{ Lang::get('firstvisit.firsttimestuff.guidelines.link') }}</a> {{ Lang::get('firstvisit.firsttimestuff.guidelines.message2') }}  {{ Lang::get('firstvisit.firsttimestuff.guidelines.title') }} </p>
        </div>
    </div>


</div>