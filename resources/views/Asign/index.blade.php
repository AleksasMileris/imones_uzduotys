@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">

            <div class="container">
                <div class="row ">
                    <div class="col-md-3">
                        <div class="card ">



                            <div class="card-header bg-dark text-white">Užduotis priskyriama vartotojui </div>

                            <div class="card-body bg-secondary">


                                <form method="post" action="{{route('asign.addTask')}}">
                                    @csrf
                                    <select name="user_id" class="form-select m-2">
                                        @foreach($users as $user)


                                            <option value="{{ $user->id }}">{{$user->name}}</option>

                                        @endforeach

                                    </select>
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
