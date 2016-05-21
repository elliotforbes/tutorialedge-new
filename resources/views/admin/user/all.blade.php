@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Users:</h2>
    <table class="pure-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Github ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->github_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection