@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top: 100px;">
        <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <div class="bg-dark text-light py-2 text-center"> ALL ENQUIRIES </div>
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
            @foreach($enquiries as $enquiry)
                <tr>
                    <td>{{ $enquiry->getUser->name }}</td>
                    <td>{{ $enquiry->subject }}</td>
                    <td>{{ $enquiry->description }}</td>
                    <td>{{ $enquiry->status }}</td>
                    <td>
                        @if($enquiry->status == 'unread')
                        <span><a href="{{ route('enquiries.update', $enquiry->id) }}" class="btn btn-warning btn-sm">Mark As Read</a></span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
