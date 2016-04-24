@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Admin Page</h3>
    <div class="row">
        <div class="col s3">
            <ul class="collection with-header">
                <li class="collection-header"><h4>First Names</h4></li>
                <li class="collection-item">Alvin</li>
                <li class="collection-item">Alvin</li>
                <li class="collection-item">Alvin</li>
                <li class="collection-item">Alvin</li>
            </ul>
        </div>
        <div class="col s9">
            <div class="row">
                <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection