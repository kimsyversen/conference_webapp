
<div class="row text-center">
    <div class="col-xs-4 col-sm-12 col-md-12 facebook nopadding"><a href="http://www.facebook.com/sharer.php?u={{ Config::get('uninett.base_url') }}/{{ $session['links']['session']['uri'] }}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"> <span class="fa fa-facebook"></span> </a>  </div>

    <div class="col-xs-4 col-sm-12 col-md-12 twitter nopadding"><a href="http://twitter.com/share?url={{ Config::get('uninett.base_url') }}/{{ $session['links']['session']['uri'] }}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"> <span class="fa fa-twitter"></span></a></div>
    <div class="col-xs-4 col-sm-12 col-md-12 google-plus nopadding"><a href="https://plus.google.com/share?url={{ Config::get('uninett.base_url') }}/{{ $session['links']['session']['uri'] }}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="fa fa-google-plus"></span></a></div>
</div>
