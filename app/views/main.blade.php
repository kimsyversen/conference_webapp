@extends('layouts.default')

@section('content')


        <div class="row">
            <div class='col-xs-12'>
                {{ Breadcrumbs::render('home') }}
            </div>
        </div>
        @include('layouts.partials.errors-and-messages')

        <div class="row">
            <div class="col-xs-12">
                <h1>Home</h1>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget neque in eros volutpat pretium. Vivamus justo augue, tempor non dolor eget, bibendum lobortis justo. Donec tristique nulla ut dui placerat, ac pharetra leo lobortis. Praesent in blandit tortor. Curabitur eget scelerisque sapien. Nam in iaculis augue, sit amet aliquam eros. Donec in erat est. Sed fermentum diam eu sodales vestibulum. In non ipsum non nisl scelerisque facilisis. Duis ut rutrum elit. Etiam enim turpis, tempus et sapien sit amet, facilisis tempus felis. Sed viverra non purus sed tristique. Vestibulum vel condimentum felis, nec laoreet sem. Vivamus sed leo tempus, mollis nisl maximus, ullamcorper urna.

                    Quisque leo nisi, maximus at quam tempus, accumsan vulputate massa. Praesent at molestie urna. Sed eu scelerisque dolor. Cras pellentesque orci tellus, quis tempus nunc interdum a. Etiam sit amet nunc varius, vulputate purus eu, malesuada augue. Morbi tempor tortor mi, a semper enim pellentesque id. Cras lacinia massa at facilisis gravida. Fusce pulvinar magna vitae arcu vehicula tincidunt.

                    Aenean mattis, neque quis maximus placerat, est sapien iaculis orci, vitae ultricies ante diam ac lectus. Proin pellentesque, ligula vel accumsan cursus, neque felis aliquam augue, id elementum risus urna quis erat. In hac habitasse platea dictumst. Vestibulum malesuada nibh id varius scelerisque. Fusce nunc ante, convallis id volutpat eget, eleifend quis tortor. Mauris lacinia fringilla imperdiet. Donec non ex pulvinar, rhoncus leo sit amet, vestibulum justo. Morbi a velit vel purus gravida cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere dolor eu sapien porta hendrerit a eget est. Vivamus varius magna neque, quis ornare magna tincidunt in.

                    Aenean imperdiet suscipit dolor id bibendum. Morbi a mauris sit amet ante vehicula euismod. Maecenas velit odio, convallis ut eros quis, tempus consectetur leo. Etiam condimentum metus eu libero lacinia, sit amet rhoncus augue euismod. Suspendisse potenti. In et tellus eget metus hendrerit pretium. Sed aliquet auctor quam. Vivamus finibus, diam ornare fringilla euismod, quam urna porttitor nulla, sed scelerisque sem purus ac urna. Pellentesque aliquet ante risus, vel rutrum magna luctus et. Etiam bibendum efficitur consequat. Phasellus diam magna, maximus et urna nec, iaculis tincidunt erat. Integer commodo, lorem ac volutpat pellentesque, enim neque laoreet lectus, vitae hendrerit arcu velit feugiat velit.

                    In hac habitasse platea dictumst. Suspendisse potenti. Fusce eget nulla augue. Sed vitae nisl magna. Etiam tristique diam ante, id faucibus turpis accumsan a. Proin vel auctor orci, et iaculis enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. In pulvinar placerat placerat.
                </p>
            </div>
        </div>
@stop