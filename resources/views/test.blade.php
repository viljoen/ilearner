@extends('layout.layout')

@section('content')
    <div class="antialiased">
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


            <div class="dark:text-white">
                <img src="/img/Fam Crest.png" alt="Family Crest" class="src" style="height: 20rem">
                <!-- this is the  test in the middle of the screen-->
                <p> This is a test Profile Page!</p><br>



                <br>
                <p>The function below is a loop using "blade @ for"</p>
                @for ($i = 0; $i < count($users); $i++)
                    <p>{{ $users[$i]['firstName'] }}</p>
                @endfor

                <br>
                <p> Referencing the name variable, when i put http://localhost:8000/test?name=peter&age=30 in the address bar</p>
                <p>{{$name}} , {{$age}}</p><br>
                <p>Using blade @ foreach</p>
                @foreach ($users as $user)
                    <div>
                        Loop Index: {{ $loop->index }}<br>
                        Firstname: {{ $user['firstName'] }}<br>
                        Lastname: {{ $user['lastName'] }} <br>
                        Email Address: {{ $user['email'] }}<br>
                        Age:{{ $user['age'] }}<br>
                        Date Created: {{ $user['dateCreated'] }}<br><br>
                        @if ($loop->first)
                            <span>
                                (first in the loop)<br><br>
                            </span>
                        @endif
                        @if ($loop->last)
                            <span>
                                (last in the loop)<br><br>
                            </span>
                        @endif
                    </div>
                @endforeach




            </div>
        </div>
    </div>
@endsection

