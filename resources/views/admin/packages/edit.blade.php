@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top:70px;">
        <h3>EDIT PACKAGE</h3>
        <form class="mt-4" action="{{ route('admin.packages.update', $package->id) }}" method="post">
            @csrf;
            <div class="form-group">
                <label for="name">Package Name</label>
                <input type="text" class="form-control" id="name" value="{{ $package->name }}" placeholder="Enter Package Name" name="name">
            </div>
            <div class="form-group">
                <label for="duration">Package Duration</label>
                <input type="text" class="form-control" id="duration" value="{{ $package->duration }}" placeholder="Enter Package Duration" name="duration">
            </div>
            <div class="form-group">
                <label for="fee">Package Fee</label>
                <input type="text" class="form-control" id="fee" value="{{ $package->fee }}" placeholder="Enter Package Fee" name="fee">
            </div>
            <div class="form-group">
                <label for="vehicle">Vehicle Name</label>
                <input type="text" class="form-control" id="vehicle" value="{{ $package->vehicle }}" placeholder="Enter Package Vehicle" name="vehicle">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    </div>
@endsection
