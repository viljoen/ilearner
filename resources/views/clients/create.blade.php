@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="dark:text-black">
                <h1> Add a new client!</h1><br>
                <form  class="col s12" action="" method=""">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <label for="first_name"> First Name:</label>
                        <input type="text" id="first_name" name="first_name">
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <label for="last_name"> Last Name:</label>
                        <input type="text" id="last_name" name="last_name">
                    </div>
                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix ">email</i>
                        <label for="email"> Email:</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix ">verified</i>
                        <label for="age"> Age:</label>
                        <input type="text" id="age" name="age">
                    </div>
                <div class="row">
                    <div class="submit col s4">
                        <a class="waves-effect waves-light btn"><i class="material-icons right">person_add</i>Add Client</a>
                    </div>
                    <div class="submit col s4">

                    </div>

                    <div class="button col s4">
                        <a class="waves-effect waves-light btn" href="/client"><i class="material-icons right">view_list</i>Return</a>
                    </div>

                </div>


                </form>






            </div>
        </div>
    </div>
@endsection


