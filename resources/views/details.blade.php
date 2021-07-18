@extends('layout.layout')

@section('content')
    <div class="antialiased">
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


            <div class="dark:text-white">
                <img src="/img/Fam Crest.png" alt="Family Crest" class="src" style="height: 20rem">
                <!-- this is the  test in the middle of the screen-->
                <p> This is a test route parameter page</p><br>
                <p> The detail parameter is: {{$id}}</p>







            </div>
        </div>
    </div>
@endsection

