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
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s3"><a class="active" href="#test1">Personal</a></li>
                                <li class="tab col s3"><a href="#test2">Staff</a></li>
                                <li class="tab col s3"><a href="#test3">Learner</a></li>
                                <li class="tab col s3"><a href="#test4">Etc</a></li>
                            </ul>
                        </div>
                        <div id="test1" class="col s12">
                            <div class="col s12 m6 l6">

                                <div class="card">

                                    <div class="card-content">
                                        <p> UserId: {{$client->id}}</p>
                                        <p> First Name: {{$client->first_name}}</p>
                                        <p> Last Name: {{$client->last_name}}</p>
                                        <p> Email: {{$client->email}}</p>
                                        <p> Age: {{$client->age}}</p>
                                        <p> Date Created: {{$client->created_at}}</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="/client/{{$client->id}}">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="test2" class="col s12">Staff</div>
                        <div class="col s12 m6 l6">

                            <div class="card">

                                <div class="card-content">
                                    <p> Staff UserId: {{$client->id}}</p>
                                    <p> First Name: {{$client->first_name}}</p>
                                    <p> Last Name: {{$client->last_name}}</p>
                                    <p> Email: {{$client->email}}</p>
                                    <p> Age: {{$client->age}}</p>
                                    <p> Date Created: {{$client->created_at}}</p>
                                </div>
                                <div class="card-action">
                                    <a href="/client/{{$client->id}}">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div id="test3" class="col s12">Learner</div>
                        <div class="col s12 m6 l6">

                            <div class="card">

                                <div class="card-content">
                                    <p> Learner UserId: {{$client->id}}</p>
                                    <p> First Name: {{$client->first_name}}</p>
                                    <p> Last Name: {{$client->last_name}}</p>
                                    <p> Email: {{$client->email}}</p>
                                    <p> Age: {{$client->age}}</p>
                                    <p> Date Created: {{$client->created_at}}</p>
                                </div>
                                <div class="card-action">
                                    <a href="/client/{{$client->id}}">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div id="test4" class="col s12">Etc</div>
                        <div class="col s12 m6 l6">

                            <div class="card">

                                <div class="card-content">
                                    <p> Etc UserId: {{$client->id}}</p>
                                    <p> First Name: {{$client->first_name}}</p>
                                    <p> Last Name: {{$client->last_name}}</p>
                                    <p> Email: {{$client->email}}</p>
                                    <p> Age: {{$client->age}}</p>
                                    <p> Date Created: {{$client->created_at}}</p>
                                </div>
                                <div class="card-action">
                                    <a href="/client/{{$client->id}}">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach


                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>





@endsection

