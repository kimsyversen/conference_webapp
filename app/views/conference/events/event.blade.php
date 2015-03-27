@extends('conference.partials.item')
    @section('item')
        <div class="row session nopadding" data-value="{{ $session['id'] }}" data-url="/{{ $session['links']['session']['uri'] }}">
            <div class="col-xs-12">
                <div class="row event">
                    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 event-time">
                        @include('conference.events.partials.time')
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-9 info">
                        <h4><a href="/{{ $session['links']['session']['uri'] }}">{{ $session['title'] }}</a></h4>

                        <div class="row descriptions">
                            <div class="col-xs-12 session-info">
                                @include('conference.events.partials.key-details')
                            </div>
                            <div class="description-short">
                                <div class="col-xs-12">
                                    @if(!empty($session['description']) )
                                        <p> {{ ConferenceHelper::getShortDescription($session['description'], 5) }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="description-long hidden">
                                <div class="col-xs-12">
                                    <p>{{ $session['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('conference.events.partials.buttons')
            </div>
        </div>
    @overwrite