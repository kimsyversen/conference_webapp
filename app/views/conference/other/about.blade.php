@extends('conference.layouts.default')
@section('content')

    @include('conference.layouts.components.breadcrumb', ['breadcrumb' => Breadcrumbs::render('about_creators') ])
    @include('conference.layouts.partials.errors-and-messages')

    @include('conference.layouts.partials.page-header', ['text' => 'Om applikasjonen (Norwegian)'])

    <div class="container">
        <div class="row row-center">
            <div class="col-md-2"></div>
            <div class="col-xs-12 col-md-8 text-center about-the-application">

                <p class="lead">
                Denne applikasjonen er laget av Kim Syversen og Magnus Lindgård Sandgren i forbindelse med deres masteroppgave ved NTNU, og i samarbeid med UNINETT.
                Applikasjonen har som mål å gjøre det lettere for akkurat deg.
                Du kan aksessere konferanse-programmet, legge til interessante sesjoner i egen agenda, se kart over konferanseområdet og motta meldinger på en nyhetsfeed eller direkte fra admin.
                Om du ønsker, kan du være fullstendig anonym når du bruker applikasjonen, men hvis du skal ta i bruk personlig agenda så er en gyldig epost-adresse nødvendig.
                Nettsiden bruker en sikker tilkopling og passord blir kryptert.

                Vi håper du vil ta i bruk applikasjonen, og fortell gjerne hva du synes om den.
                </p>
            </div>
        </div>
    </div>
@stop






