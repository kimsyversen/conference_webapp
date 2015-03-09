@foreach(array_chunk($data, 2) as $row)
    <div class="row">
        @foreach($row as $conference)
            <div class="col-md-6">
                <div class="conference-item">
                    <div class="banner">
                        <a href="/{{$conference['link']['uri'] }} " rel="{{ $conference['link']['rel']  }}">
                            <img src="{{ $conference['banner']}}" rel="{{ $conference['name']}}">
                        </a>
                    </div>
                    <div class="main">
                        <div>
                            <span class="name">
                                <a href="/{{$conference['link']['uri'] }} " rel="{{ $conference['link']['rel']  }}" class="conference-link"> {{ substr($conference['name'],0, 30) }}</a></span>
                        </div>
                        <div>
                            <span class="time">
                            {{ ConferenceHelper::timeStampToHuman($conference['begins']['date'])}}</span>
                        </div>
                        <div class="description">
                            <button class='btn form-control button' id="button"> Conference description</button>

                            <div id="text" class="text hidden">
                                <p> <i class="about"> About</i> {{ $conference['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
