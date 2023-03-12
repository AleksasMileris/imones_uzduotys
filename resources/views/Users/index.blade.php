
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col-md-6">

            <table class="table table-striped table-info">

                <thead>
                <tr>
                    <th>
                        Vardas
                    </th>
                    <th>
                        Gmailas
                    </th>
                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)

                    <tr>
                        <td class="col-md-4">
                           {{ $user->name }}
                        </td>
                        <td class="col-md-4">
                            {{ $user->email }}

                        </td>
                        <td class="col-md-2">

                            <a class="btn btn-info " href="{{route("users.edit", $user->id)}}">Redaguoti</a>
                        </td>
                        <td class="col-md-2">
                            <a class="btn btn-info " href="{{route("users.show", $user->id)}}">Info</a>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
