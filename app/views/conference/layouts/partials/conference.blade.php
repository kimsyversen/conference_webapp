

@if(count($data) == 1)
    @foreach($data as $conference)
    <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-12 col-md-offset-3 col-md-6">
        <div class="conference-item">
            <div class="row header">
                <div class="col-xs-12">
                    <a href="/{{$conference['link']['uri'] }}">
                        <img class="img-responsive" src="{{ $conference['banner']}}" alt="{{ $conference['name']}}">
                    </a>
                </div>
            </div>

            <div class="body">
                <div class="row">
                    <div class="col-xs-12">
                        <div>
                            <span class="name"> <a href="/{{$conference['link']['uri'] }}" class="conference-link"> {{ substr($conference['name'],0, 30) }}</a></span>
                        </div>
                        <div>
                            <span class="time">{{ ConferenceHelper::timestampToBeingEnds( $conference['start_date']['date'], $conference['end_date']['date'], 'Y/d/m') }} in {{ $conference['country'] }}, {{ $conference['city'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="description descripton-of-conference">
                            <div class="text hidden">
                                <p> {{ $conference['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 ">
                    @include('conference.components.buttons.button-read-more')
                    {{--<button class='btn form-control button-conference button-dark button-more' id="button-conference-more">Read more</button>--}}
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @else
    @foreach(array_chunk($data, 2) as $row)
        <div class="row">
            @foreach($row as $conference)
                <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-6">
                    <div class="conference-item">
                        <div class="row header">
                            <div class="col-xs-12">
                                <a href="/{{$conference['link']['uri'] }}">
                                    <img class="img-responsive" src="{{ $conference['banner']}}" alt="{{ $conference['name']}}">
                                </a>
                            </div>
                        </div>

                        <div class="body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div>
                                        <span class="name"> <a href="/{{$conference['link']['uri'] }}" class="conference-link"> {{ substr($conference['name'],0, 30) }}</a></span>
                                    </div>
                                    <div>
                                        <span class="time">{{ ConferenceHelper::timestampToBeingEnds( $conference['start_date']['date'], $conference['end_date']['date'], 'Y/d/m') }} in {{ $conference['country'] }}, {{ $conference['city'] }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="description descripton-of-conference">
                                        <div class="text hidden">
                                            <p> {{ $conference['description'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 ">
                                @include('conference.components.buttons.button-read-more')
                                {{--<button class='btn form-control button-conference button-dark button-more' id="button-conference-more">Read more</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

@endif


