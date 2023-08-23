@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top: 100px;">
        <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead class="bg-dark text-light">
            <tr>
                <th scope="col">NAME</th>
                <th scope="col">PHONE</th>
                <th scope="col">AGE</th>
                <th scope="col">GENDER</th>
                <th scope="col">TIME</th>
                <th scope="col">PROGRAM</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->time_slot }}</td>
                    <td>{{ $student->program_id }}</td>
                    <td>{{ $student->status }}</td>
                    <td>
                        <span><a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a></span>
                        <span><a href="{{ route('students.delete', $student->id) }}" class="btn btn-warning btn-sm">Delete</a></span>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
