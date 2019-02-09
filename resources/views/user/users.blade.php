@extends('layouts.app')

@section('content')
    <section class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection