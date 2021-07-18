@extends('layout.layout')

@section('content')
    <div class="antialiased">
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


            <div class="dark:text-white">
                <img src="/img/Fam Crest.png" alt="Family Crest" class="src" style="height: 20rem">
                <!-- this is the  test in the middle of the screen-->
                <p> This is a test route parameter page</p><br>
                <p> UserId: {{$clients->id}}</p>
                <p> First Name: {{$clients->first_name}}</p>
                <p> Last Name: {{$clients->last_name}}</p>
                <p> Email: {{$clients->email}}</p>
                <p> Age: {{$clients->age}}</p>
                <p> Date Created: {{$clients->created_at}}</p>







            </div>
            <div class="back-left dark:text-white">
                <a href="/client" ><- back to all clients</a>
            </div>
        </div>
    </div>
@endsection

