@extends('layouts.admin-new')

@section('content')
<div class="widget">
    <div class="row">
        <div class="col-lg-6">
            <h2>New Post</h2>
        </div>
        <div class="col-lg-6"></div>
        
        <div class="clear"></div>

        <div class="col-lg-12">
            {!! Form::open(['url' => 'admin/articles']) !!}
                <div class="form-group">
                    {!! Form::label('Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Description') !!}
                    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('body') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('author') !!}
                    {!! Form::text('author', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Image Path') !!}
                    {!! Form::text('image_path', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Course ID') !!}
                    {!! Form::text('course_id', null, ['class' => 'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('submit', ['class' => 'btn btn-primary form-control']) !!}
                </div>

            {!! Form::close() !!}
       </div>


    </div>
</div>
@endsection