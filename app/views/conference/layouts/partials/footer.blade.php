<div class="container-fluid footer-conference">
    <div class="row">
        <div class="footer">
            <div class=" col-xs-12 text-center">
                <h4>Other information</h4>
                <ul class="list-unstyled">
                    <li class="footer-list-item"><a href="#">About the creators</a></li>
                    <li class="footer-list-item"><a href="{{ route('featurette_path') }}">Get a quick tour of the application</a></li>
                    <li class="footer-list-item"><a href="#">Disclaimer?</a></li>
                    <li class="nav-item"> {{ link_to_route('conferences_path', 'All conferences', null, ['name' => 'all-conferences-link'] ) }} </li>
                </ul>
            </div>
        </div>
    </div>
</div>

