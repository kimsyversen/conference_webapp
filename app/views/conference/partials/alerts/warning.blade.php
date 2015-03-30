<div class="site-notice">
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-warning alert-dismissible animated fadeIn">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="exclamation animated flash">
                    <i class="fa fa-exclamation-triangle"></i>
                </div>
                <div class="message">
                    <p> {{ $warning or 'It should be a message here but it was not specified' }} </p>
                </div>
            </div>
        </div>
    </div>
</div>