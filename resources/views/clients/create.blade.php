@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="dark:text-black">
                <h1> Add a new client!</h1><br>

                    <form action="{{route('client.store')}}" method="POST">
                        @csrf
                        <label for="first_name">first_name</label>
                        <input type="text" id="first_name" name="first_name" required>
                        <label for="last_name">last_name</label>
                        <input type="text" id="last_name" name="last_name" required>
                        <label for="email">email</label>
                        <input type="email" id="email" name="email" required>
                        <label for="age">age</label>
                        <input type="text" id="age" name="age">
                        <label>
                            <span>Interests</span><br/>
                        </label>
                        <label>
                            <input type="checkbox" name="interests[]" value="music"><span>Music</span>
                        </label>
                        <label>
                            <input type="checkbox" name="interests[]" value="sport"><span>Sport</span>
                        </label>
                        <label>
                            <input type="checkbox" name="interests[]" value="tv"><span>Tv</span>
                        </label>
                        <label>
                            <input type="checkbox" name="interests[]" value="podcasts"><span>Podcasts</span>
                        </label>
                        <label>
                            <input type="checkbox" name="interests[]" value="reading"><span>Reading</span>
                        </label><br/>

                        <input type="submit" value="Add Client">
                    </form>

            </div>
        </div>
    </div>
@endsection


