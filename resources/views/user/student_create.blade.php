@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center my-4">GET ADMISSION</h3>
                <form action="{{ route('student.store') }}" method="POST" name="form2" enctype="multipart/form-data">
                    @csrf;
                    <div class="row mb-3">
                        <label for="Name" class="col-md-3 col-form-label text-md-end">{{ __('Name:') }}</label>
                        <div class="col-md-7">
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Phone" class="col-md-3 col-form-label text-md-end">{{ __('Phone:') }}</label>
                        <div class="col-md-7">
                            <input id="phone" type="text" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Age" class="col-md-3 col-form-label text-md-end">{{ __('Age:') }}</label>
                        <div class="col-md-7">
                            <input id="age" type="text" class="form-control" name="age" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Gender" class="col-md-3 col-form-label text-md-end">{{ __('Gender:') }}</label>
                        <div class="col-md-7">
                            <select  id="gender" name="gender" class="form-group" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Time-Slot" class="col-md-3 col-form-label text-md-end">{{ __('Time Slot:') }}</label>
                        <div class="col-md-7">
                            <select  id="time_slot" name="time_slot" class="form-group" required>
                                <option value="">Select Time Slot</option>
                                <option value="Morning">Morning</option>
                                <option value="Evening">Evening</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="program" class="col-md-3 col-form-label text-md-end">{{ __('Program:') }}</label>
                        <div class="col-md-7">
                            <select  id="program_id" name="program_id" class="form-group" required>
                                <option class="form-control" value="">Select Program</option>
                                <option class="form-control" value="1">Program 1</option>
                                <option class="form-control" value="2">Program 2</option>
                                <option class="form-control" value="3">Program 3</option>
                            </select>
                        </div>
                    </div>
                        <input type="hidden" name="user_id" class="form-control input-lg" value="{{ Auth::user()->id }}" />
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
