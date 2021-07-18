@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
               <h1> Find your clients!</h1><br>
                <div class="button">
                    <a class="waves-effect waves-light btn" href="/client/create"><i class="material-icons right">person_add</i>Add Client</a>
                </div>

                <table class="striped">
                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th> First Name</th>
                            <th> Last Name</th>
                            <th> Email </th>
                            <th> Age </th>
                            <th> Date Created</th>
                        </tr>
                    </thead>


                    <tbody>
                    @foreach ($clients as $client)
                        <tr>
                                <td>{{$client->id}}</td>
                                <td><a href="/client/{{$client->id}}">{{$client->first_name}}</a></td>
                                <td><a href="/client/{{$client->id}}">{{$client->last_name}}</a></td>
                                <td><a href="/client/{{$client->id}}">{{$client->email}}</a></td>
                                <td>{{$client->age}} </td>
                                <td>{{$client->created_at}}</td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

