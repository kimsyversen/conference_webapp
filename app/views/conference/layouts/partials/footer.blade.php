<div class="footer container-fluid">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h4>{{ Lang::get('menu.footer_title') }}</h4>
            <ul class="list-unstyled">
                <li class="footer-list-item"><a href="{{ route('about_creators_path') }}"> {{ Lang::get('menu.about_application') }}</a></li>
                <li class="footer-list-item"><a href="{{ route('featurette_path') }}">{{ Lang::get('menu.features_application') }}</a></li>
                <li class="nav-item"> <a href="{{ route('conferences_path') }}">{{ Lang::get('menu.all_conferences') }}</a> </li>
            </ul>
        </div>
    </div>
</div>
