
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Nauja užduotis</div>

                    <div class="card-body">
                        <form method="post" action="{{ route("tasks.store") }}">
                            @csrf

                        <div class="mt-3">
                            <label class="form-label">Užduotis</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Statusas</label>
                            <input class="form-control" type="text" name="status">
                        </div>
                            <button class="btn btn-success mt-2">Pridėti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
