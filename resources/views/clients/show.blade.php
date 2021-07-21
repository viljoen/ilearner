@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6">
                <h1>Your Profile!</h1>
                <div class="card">
                    <div class="card-image">
                        <img src="#">
                        <span class="card-title">Card Title</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">edit</i></a>
                    </div>
                    <div class="card-content">
                        <p> UserId: {{$clients->id}}</p>
                        <p> First Name: {{$clients->first_name}}</p>
                        <p> Last Name: {{$clients->last_name}}</p>
                        <p> Email: {{$clients->email}}</p>
                        <p> Age: {{$clients->age}}</p>
                        <p> Date Created: {{$clients->created_at}}</p>
                    </div>
                    <div class="card-action">
                        <a href="/client">Return to Clients</a>
                    </div>
                 </div>
             </div>
        </div>






            </div>
            <div class="back-left dark:text-white">
                <a href="/client" ><- back to all clients</a>
            </div>
        </div>
    </div>
@endsection

