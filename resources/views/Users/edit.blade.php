
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Nauja užduotis</div>

                    <div class="card-body">
                        <form method="post" action="{{ route("users.update",$user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            <div class="mt-3">
                                <label class="form-label">Užduotis</label>
                                <input class="form-control" type="text" name="name" value="{{$user->name}}">
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Gmail</label>
                                <input class="form-control" type="text" name="email" value="{{$user->email}}">
                            </div>


                            <div class="mt-3">
                                <label class="form-label">Pakeisti Slaptažodi</label>
                                <input class="form-control" type="password" name="password">
                            </div>

                            <div class="mt-3 col-md-6">
                                <label class="form-label">Nuotrauka</label>
                                <input class="form-control" type="file" name="picture">
                            </div>
                            <button class="btn btn-success mt-2">Išsaugoti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
