@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Users:</h2>
    <table class="pure-table">
        <thead>
            <tr>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $user->id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection