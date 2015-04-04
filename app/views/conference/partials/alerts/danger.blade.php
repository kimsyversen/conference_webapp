<div class="site-notice">
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-danger alert-dismissible animated fadeIn">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="bell animated flash">
                    <i class="glyphicon glyphicon-bell"></i>
                </div>
                <div class="message">
                    <p> {{ $danger or 'It should be a message here but it was not specified' }} </p>
                </div>
            </div>
        </div>
    </div>
</div>