@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top:70px;">
        <h3>EDIT CONTACT DETAILS</h3>
        <form class="mt-4" action="{{ route('manage.contact_page.update', $record->id) }}" method="post">
            @csrf;
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" value="{{ $record->address }}" placeholder="Enter Adress" name="address">
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" value="{{ $record->contact }}" placeholder="Enter Contact" name="contact">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="{{ $record->email }}" placeholder="Enter Email" name="email">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    </div>
@endsection
