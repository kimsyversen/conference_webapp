@if ($breadcrumbs)
        <div class="row">
            <hr />
            <div class="col-xs-12 text-center">
                <span>You are here</span>
                <ul class="conference-breadcrumb">
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if (!$breadcrumb->last)
                            <li> <a href="{{{ $breadcrumb->url }}}"> {{{ $breadcrumb->title }}}</a> / </li>
                        @else
                            <li class="active">{{{ $breadcrumb->title }}}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <hr />
        </div>

@endif

