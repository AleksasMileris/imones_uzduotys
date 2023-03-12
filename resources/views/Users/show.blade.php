
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-evenly">
        <div class="col-md-5">

            <table class="table table-striped table-info text-center">

                <thead>
                <tr>
                    <th>
                        Vardas
                    </th>
                    <th>
                        Gmailas
                    </th>



                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="col-md-4">
                            {{ $user->name }}
                        </td>

                        <td class="col-md-4">
                            {{ $user->email }}

                        </td>





                    </tr>


                </tbody>
            </table>

        </div>
        <div class="flex-column col-md-5">
        @foreach($photos as $photo)
            @if($photo->user_id== $user->id)
                <div class="card text-center col-md-8 mb-3">
                    <div class="card-header">{{$user->name}} : Nuotrauka</div>

                    <div class="card-body">



                        <img src="{{asset('/storage/photos/'.$photo->photo)}}" style="width: 250px" alt="picture of a user"><br>
                        <form class="" method="post" action="{{route("users.destroy", $photo->id)}}">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger">Ištrinti</button>
                        </form>


                    </div>
                </div>
            @endif
        @endforeach
        </div>
        </div>
    </div>
@endsection
