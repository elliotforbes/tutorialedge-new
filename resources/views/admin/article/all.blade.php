@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2>All Lessons:</h2>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <button class="btn btn-success pull-right">New Lesson</button>
        </div> 
        <div class="col-lg-12">
            <table class="table table-striped">
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
    </div>
</div>
@endsection