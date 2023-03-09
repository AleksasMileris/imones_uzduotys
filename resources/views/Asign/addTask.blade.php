@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">

            <div class="container">
                <div class="row ">
                    <div class="col-md-3">
                        <div class="card ">



                                <div class="card-header bg-dark text-white">Užduotis Priskiriama : {{ $user->name }} </div>

                                <div class="card-body bg-secondary">



                                    <form method="post" action="{{route('asign.store', $user_id)}}">
                                        @csrf
                                        <div class="d-flex">
                                            <select name="task_id" class="form-select m-2">
                                                @foreach($tasks as $task)
                                                    <option value="{{ $task->id }}">{{$task->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <button class="btn btn-warning m-2 float-end"> Priskirti užduotį</button>

                                    </form>

                                </div>
                        </div>





                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
