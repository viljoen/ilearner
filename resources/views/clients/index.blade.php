@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
               <h1> Find your clients!</h1><br>
            </div>

        </div>
        <div class="row">
            <div class="col s8">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col s4">

            </div>
            <div class="col s4">

            </div>
            <div class="col s4">
                <div class="button right">
                    <a class="waves-effect waves-light btn" href="/client/create"><i class="material-icons right">person_add</i>Add Client</a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col s12 m12 l12">

                @foreach ($clients as $client)
                <button class="accordion"><i class="material-icons">account_circle</i>  {{$client->first_name}} {{$client->last_name}} - {{$client->email}}</button>
                <div class="panel">
                    <div class="row">
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                            <div class="mdl-tabs__tab-bar">
                                <a href="#profile-panel" class="mdl-tabs__tab is-active">Profile</a>
                                <a href="#staff-panel" class="mdl-tabs__tab">Staff</a>
                                <a href="#student-panel" class="mdl-tabs__tab">Student</a>
                                <a href="#quick-panel" class="mdl-tabs__tab">Quick Actions</a>

                            </div>

                            <div class="mdl-tabs__panel is-active" id="profile-panel">
                                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">Profile</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        <ul>
                                            <li>{{$client->id}}</li>
                                            <li>{{$client->first_name}}</li>
                                            <li>{{$client->last_name}}</li>
                                            <li>{{$client->email}}</li>
                                            <li>{{$client->age}}</li>
                                            <li>{{$client->created_at}}</li>
                                        </ul>
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">
                                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/client/{{$client->id}}">
                                            Edit
                                        </a>
                                    </div>
                                    <div class="mdl-card__menu">
                                        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                            <i class="material-icons">share</i>
                                        </button>
                                    </div>
                                </div>

                                <ul>
                                    <li>Starks</li>

                                </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="staff-panel">
                                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">Welcome</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris sagittis pellentesque lacus eleifend lacinia...
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">
                                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                            Get Started
                                        </a>
                                    </div>
                                    <div class="mdl-card__menu">
                                        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                            <i class="material-icons">share</i>
                                        </button>
                                    </div>
                                </div>

                                <ul>
                                    <li>Lanister</li>

                                </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="student-panel">
                                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">Welcome</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris sagittis pellentesque lacus eleifend lacinia...
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">
                                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                            Get Started
                                        </a>
                                    </div>
                                    <div class="mdl-card__menu">
                                        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                            <i class="material-icons">share</i>
                                        </button>
                                    </div>
                                </div>

                                <ul>
                                    <li>Targerian</li>

                                </ul>
                            </div>
                            <div class="mdl-tabs__panel" id="quick-panel">
                                <ul>
                                    <li>Email</li>
                                    <li>SMS</li>
                                    <li>Chat</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach



            </div>
        </div>
    </div>




@endsection

