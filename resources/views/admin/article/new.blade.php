@extends('layouts.admin')

@section('content')
<div class="container">
    <h5>Create New Article</h5>
    <div class="row">
        <form class="col s12">
        <div class="row">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Lesson Title" name="title" id="title" type="text" class="validate">
                    <label for="title">Title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                <input placeholder="Placeholder" id="Author" type="text" class="validate">
                <label for="Author">Author</label>
                </div>
                <div class="input-field col s6">
                <input id="slug" type="text" class="validate" placeholder="slug">
                <label for="slug">Slug</label>
                </div>
            </div>
            <div class="row">
                 <div class="input-field col s6">
                    <select multiple>
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    </select>
                    <label>Materialize Multiple Select</label>
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">comment</i>
                    <textarea id="icon_prefix2" name="body" class="materialize-textarea"></textarea>
                    <label for="icon_prefix2">Body</label>
                </div>
            </div>
           
            
            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
});
</script>
@endsection