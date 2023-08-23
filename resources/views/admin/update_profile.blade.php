@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top:70px;">
        <h3>EDIT PERSONAL INFORMATION</h3>
        <form class="mt-4" action="{{ route('admin.store', $user->id) }}" method="post">
            @csrf;
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" id="name" value="{{ $user->name }}" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" value="{{ $user->email }}" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" placeholder="Enter New Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
@endsection
