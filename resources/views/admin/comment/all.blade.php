@extends('layouts.admin-new')

@section('content')
<div class="widget">
    <h2>All Users:</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Lesson Id:</th>
                <th>Comment Author</th>
                <th>Comment Body</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->lesson_id }}</td>
                    <td>{{ $comment->author }}</td>
                    <td>{{ $comment->body }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection