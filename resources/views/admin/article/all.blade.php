@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Lessons:</h2>
    <table class="pure-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Views</th>
                <th>Actions:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lessons as $lesson)
                <tr>
                    <td>{{ $lesson->id }}</td>
                    <td>{{ $lesson->title }}</td>
                    <td>{{ $lesson->views }}</td>
                    <td>
                        <a class="pure-button pure-button-primary" href="{{ url('/admin/articles/')}}/{{ $lesson->slug }}/edit">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection