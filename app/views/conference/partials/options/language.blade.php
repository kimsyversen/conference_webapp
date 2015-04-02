{{--{{ Form::open(['route' => 'ajax.user.language.change', 'id' => 'frm-language', 'class' => 'pull-left']) }}
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-change-language" data-toggle="dropdown" aria-expanded="false">
            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"> </span> <span> {{ Lang::get('menu.change-language.change-language')  }}</span>
        </button>
        <input id="language" name="language" type="hidden">
        <ul class="dropdown-menu" role="menu" onchange="submit();">
            <li onclick="$('#language').val('en'); $('#frm-language').submit();"><a href="#" data-value="en">{{ Lang::get('menu.change-language.english')  }}</a></li>
            <li onclick="$('#language').val('no'); $('#frm-language').submit();"><a href="#" data-value="no">{{ Lang::get('menu.change-language.norwegian')  }}</a></li>
        </ul>
    </div>
{{ Form::close()}}--}}


    {{ Form::open(['route' => 'ajax.user.language.change', 'id' => 'frm-language', 'class' => 'pull-left']) }}
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle btn-change-language" data-toggle="dropdown" aria-expanded="false">
            <span> {{ Lang::get('menu.change-language.change-language')  }}</span> <span class="glyphicon glyphicon-menu-down" aria-hidden="true"> </span>
        </button>
        <input id="language" name="language" type="hidden">
        <ul class="dropdown-menu" role="menu" onchange="submit();">
            <li onclick="$('#language').val('en'); $('#frm-language').submit();"><a href="#" data-value="en" data-pjax="#pure-container">{{ Lang::get('menu.change-language.english')  }}</a></li>
            <li onclick="$('#language').val('no'); $('#frm-language').submit();"><a href="#" data-value="no"  data-pjax="#pure-container">{{ Lang::get('menu.change-language.norwegian')  }}</a></li>
        </ul>
    </div>
    {{ Form::close()}}



{{--
{{ Form::open(['route' => 'ajax.user.language.change', 'id' => 'frm-language']) }}
<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span>Change language</span> <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" onchange="submit();">
        <li data-value="en"><a href="#"> English</a></li>
        <li data-value="no"><a href="#"> Norwegian</a></li>
    </ul>
</div>
{{ Form::close()}}
--}}
