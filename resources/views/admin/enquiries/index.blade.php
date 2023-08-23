@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top: 100px;">
        <h3>Unread Enquiries</h3>
        <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead class="bg-dark text-light">
            <tr>
                <th scope="col">STUDENT NAME</th>
                <th scope="col">SUBJECT</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($unread_enquiries as $unread_enquiry)
                <tr>
                    <td>{{ $unread_enquiry->user_id }}</td>
                    <td>{{ $unread_enquiry->subject }}</td>
                    <td>{{ $unread_enquiry->description }}</td>
                    <td>{{ $unread_enquiry->status }}</td>
                    <td>
                        <span><a href="{{ route('enquiries.update', $unread_enquiry->id) }}" class="btn btn-warning btn-sm">Mark As Read</a></span>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h3>Read Enquiries</h3>
        <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead class="bg-dark text-light">
            <tr>
                <th scope="col">STUDENT NAME</th>
                <th scope="col">SUBJECT</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($read_enquiries as $read_enquiry)
                <tr>
                    <td>{{ $read_enquiry->user_id }}</td>
                    <td>{{ $read_enquiry->subject }}</td>
                    <td>{{ $read_enquiry->description }}</td>
                    <td>{{ $read_enquiry->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
