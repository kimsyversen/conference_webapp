@if(isset($data))
    @foreach(array_chunk($data, 1) as $row)
        <div class="row row-conference">
            @foreach($row as $conference)
                <div class=" col-xs-12 col-sm-offset-2 col-sm-9 col-md-offset-2 col-md-8">
                    <div class="conference-item">
                        <div class="row header">
                            <div class="col-xs-12 ">
                                <a href="/{{$conference['link']['uri'] }}">
                                    <img class="img-responsive" src="{{ $conference['banner']}}" alt="{{ $conference['name']}}">
                                </a>
                            </div>
                        </div>

                        <div class="body ">
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
                                            <hr>
                                            <p> <i class="fa fa-quote-left text-muted" style="font-size: 2.5em; padding: 0 0.5em 0 0 ;"></i>{{ $conference['description'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 ">
                                @include('conference.partials.buttons.button-read-more')
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endif