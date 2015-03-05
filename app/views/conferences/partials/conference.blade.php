@foreach(array_chunk($data, 2) as $row)
        <div class="row">
            @foreach($row as $conference)
                <div class="col-md-6">
                    <div class="conference-item">
                        <div class="conference-item-banner">
                            <a href="/{{$conference['link']['uri'] }} " rel="{{ $conference['link']['rel']  }}">
                                <img src="{{ $conference['banner']}}" rel="{{ $conference['name']}}">
                            </a>
                        </div>
                        <div class="conference-item-main">
                            <div>
                                <span class="conference-name">
                                    <a href="/{{$conference['link']['uri'] }} " rel="{{ $conference['link']['rel']  }}"> {{ $conference['name'] }}</a></span>
                            </div>
                            <div>
                                <span class="conference-time">
                                   {{ ConferenceHelper::timeStampToHuman($conference['begins'])}}</span>
                            </div>
                            <hr>
                            <div class="conference-item-description">
                                <p> {{ substr($conference['description'],0,10) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endforeach
