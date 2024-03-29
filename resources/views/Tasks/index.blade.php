
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col-md-6">

    <table class="table table-striped table-info">
        <a class="btn btn-info col-md-3 float-end mb-3" href="{{route("tasks.create")}}">Pridėti užduotį</a>
        <thead>
        <tr>
            <th>
            Užduotis
            </th>
            <th>
                Užduoties statusas
            </th>
            <th></th>
            <th>Viso Užduočiu: {{ $sum }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td class="col-md-4">
                    {{ $task->name }}
                </td>
                <td class="col-md-4">
                    {{ $task->status }}
                    {{ $task->date->format('Y-m-d') }}
                </td>
                <td class="col-md-2">
                    @can('adminActions')
                    <a class="btn btn-info " href="{{route("tasks.edit",$task->id)}}">Redaguoti</a>
                    @endcan
                </td>
                <td class="col-md-2">
                    @can('adminActions')
                    <form method="post" action="{{route("tasks.destroy",$task->id)}}">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger">Ištrinti</button>
                    </form>
                    @endcan
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
            {{ $tasks->links() }}
        </div>
    </div>
@endsection
