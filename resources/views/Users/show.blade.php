
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

<th></th>

                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="col-md-4">
                            {{ $user->name }}
                        </td>

                        <td class="col-md-4 " colspan="2">
                            {{ $user->email }}

                        </td>


                    </tr>


                    <tr class="text-center "><td colspan="1"><strong>Užduotys</strong> <td colspan="2"><strong>Statusas</strong></td></tr>
                    @foreach($user->tasks as $task)

                        <tr>
                            <td>{{$task->name}}</td>
                            <td>{{$task->status}}</td>


                            <td class="col-md-2">
                                @if(\Illuminate\Support\Facades\Auth::user()->id==$user->id || Gate::allows('adminActions') )
                                <form method="post" action="{{route("task.delete",[$task->id,$user->id])}}">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger">Ištrinti</button>
                                </form>
                                @endif
                            </td>


                        </tr>
                    @endforeach


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
                        @if(\Illuminate\Support\Facades\Auth::user()->id==$user->id || Gate::allows('canChangePassword') )

                        <form class="" method="post" action="{{route("users.destroy", $photo->id)}}">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger">Ištrinti</button>
                        </form>

                        @endif


                    </div>
                </div>
            @endif
        @endforeach
        </div>
        </div>
    </div>
@endsection
