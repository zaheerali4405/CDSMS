@extends('layouts.layout_admin_panel')

@section('admin_content')
    <div class="col-md-9" style="margin-top: 100px;">
        <h4>Total Registered Users are: {{ $users }}</h4>
        <h4>Total Packages Added are: {{ $packages }}</h4>
        <h4>Total Inactive Students are: {{ $inactive_students }}</h4>
        <h4>Total Active Students are: {{ $active_students }}</h4>
        <h4>Total Pending Applications are: {{ $pending_applications }}</h4>
        <h4>Total Confirmed Applications are: {{ $confirmed_applications }}</h4>
        <h4>Total Unread Enquiries are: {{ $unread_enquiries }}</h4>
        <h4>Total Read Enquiries are: {{ $read_enquiries }}</h4>

    </div>
@endsection



