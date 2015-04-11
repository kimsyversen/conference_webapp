<div class="footer container-fluid">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h4>{{ Lang::get('menu.footer_title') }}</h4>
            <ul class="list-unstyled">
                <li class="nav-item"><i class="glyphicon glyphicon glyphicon-warning-sign"></i> <a href="{{ route('guideline_path') }}">{{ Lang::get('menu.guidelines') }}</a> </li>
                <li class="nav-item"><i class="glyphicon glyphicon-info-sign"></i> <a href="{{ route('about_path') }}"> {{ Lang::get('menu.about_application') }}</a></li>
                <li class="nav-item"><i class="glyphicon glyphicon glyphicon-question-sign"></i> <a href="{{ route('featurette_path') }}">{{ Lang::get('menu.features_application') }}</a></li>
                <li class="nav-item"><i class="glyphicon glyphicon glyphicon-home"></i> <a href="{{ route('conferences_path') }}">{{ Lang::get('menu.home') }}</a> </li>
            </ul>
        </div>
    </div>
</div>
