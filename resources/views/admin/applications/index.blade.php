@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top: 100px;">

        <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <div class="bg-dark text-light py-2 text-center"> ALL APPLICATIONS </div>
            <thead class="bg-dark text-light">
            <tr>
                <th scope="col">STUDENT NAME</th>
                <th scope="col">SHIFT/TIME</th>
                <th scope="col">PACKAGE</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->getUser->name }}</td>
                    <td>{{ $application->time_slot }}</td>
                    <td>{{ $application->getProgram->name }}</td>
                    <td>{{ $application->status }}</td>
                    <td>
                        <span><a href="{{ route('applications.update', $application->id) }}" class="btn btn-warning btn-sm">Approve</a></span>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
