@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top:70px;">
        <h3>EDIT STUDENT</h3>
        <form class="mt-4" action="{{ route('students.update', $student->id) }}" method="post">
            @csrf;
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" class="form-control" id="name" value="{{ $student->name }}" placeholder="Enter Package Name" name="name">
            </div>
            <div class="form-group">
                <label for="duration">Student Phone</label>
                <input type="text" class="form-control" id="duration" value="{{ $student->phone }}" placeholder="Enter Package Duration" name="phone">
            </div>
            <div class="form-group">
                <label for="fee">Student Age</label>
                <input type="text" class="form-control" id="fee" value="{{ $student->age }}" placeholder="Enter Package Fee" name="age">
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="gender">Student Gender</label>--}}
{{--                <select  id="gender" name="gender" class="form-group" required>--}}
{{--                    <option class="form-control" value="">Select Gender </option>--}}
{{--                    <option class="form-control" value="Male" > Male </option>--}}
{{--                    <option class="form-control" value="Female"> Female </option>--}}
{{--                    <option class="form-control" value="Other"> Other </option>--}}
{{--                </select>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="time_slot">Time Slot</label>--}}
{{--                <select  id="time_slot" name="time_slot" class="form-group" required>--}}
{{--                    <option class="form-control" value="">Select Gender</option>--}}
{{--                    <option class="form-control" value="Morning">Morning</option>--}}
{{--                    <option class="form-control" value="Evening">Evening</option>--}}
{{--                </select>--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" value="{{ $student->gender }}" placeholder="Enter Package Vehicle" name="gender">
            </div>
            <div class="form-group">
                <label for="time_slot">Time Slot</label>
                <input type="text" class="form-control" id="time_slot" value="{{ $student->time_slot }}" placeholder="Enter Package Vehicle" name="time_slot">
            </div>
            <div class="form-group">
                <label for="program_id">Student Program</label>
                <input type="text" class="form-control" id="program_id" value="{{ $student->program_id }}" placeholder="Enter Program Name" name="program_id">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
@endsection
