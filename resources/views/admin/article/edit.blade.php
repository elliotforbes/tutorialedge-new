@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h1>Edit Post: {{ $lesson->title }}</h1>
    </div>
    <div class="col-lg-6"></div>
    
    <div class="clear"></div>
    
    <form class="form" action="" method="POST">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Post Title:</label>
                <input type="text" class="form-control">
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control">
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label>Status</label>
                <select class="form-control">
                    <option value="0">Draft</option>
                    <option value="1">Published</optino>
                </select>
            </div>
        </div>
        
        <div class="col-lg-12">
            <div class="form-group">
                <label>Body</label>
                <textarea class="form-control"></textarea>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label>Image Path</label>
                <input type="text" class="form-control">
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label>Tags</label>
                <select class="form-control" multiple>
                    <option>Tag 1</option>
                    <option>Tag 2</option>
                    <option>Tag 3</option>
                </select>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="form-group">
                <label>Upload</label>
                <div class="clear"></div>
                <button class="btn btn-primary">Upload Image</button>
            </div>
        </div>
        
        
        <div class="clear"></div>
        <div class="col-lg-6">
            <button class="btn btn-success">Save</button>
        </div>
        
    </form>
</div>
@endsection