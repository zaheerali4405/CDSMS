@extends('layouts.app')

@section('content')
{{--    @if($message)--}}
{{--        <div class="uk-alert-danger" uk-alert>--}}
{{--            <a class="uk-alert-close" uk-close></a>--}}
{{--            <p>{{ $message }}</p>--}}
{{--        </div>--}}
{{--    @endif--}}

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center my-4">GET ADMISSION</h3>
                <form action="{{ route('student.store') }}" method="POST" name="form2" enctype="multipart/form-data">
                    @csrf;
                    <div class="row mb-3">
                        <label for="Name" class="col-md-3 col-form-label text-md-end">Name:</label>
                        <div class="col-md-7">
                            <input id="name" type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Phone" class="col-md-3 col-form-label text-md-end">Phone:</label>
                        <div class="col-md-7">
                            <input id="phone" type="text" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Age" class="col-md-3 col-form-label text-md-end">Age:</label>
                        <div class="col-md-7">
                            <input id="age" type="text" class="form-control" name="age" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="cnic" class="col-md-3 col-form-label text-md-end">CNIC:</label>
                        <div class="col-md-7">
                            <input id="cnic" type="text" class="form-control" name="cnic" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Address" class="col-md-3 col-form-label text-md-end">Address:</label>
                        <div class="col-md-7">
                            <input id="address" type="text" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Gender" class="col-md-3 col-form-label text-md-end">Gender:</label>
                        <div class="col-md-7">
                            <select  id="gender" name="gender" class="form-group w-100 h-100" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Time-Slot" class="col-md-3 col-form-label text-md-end">Time Slot:</label>
                        <div class="col-md-7">
                            <select  id="time_slot" name="time_slot" class="form-group w-100 h-100" required>
                                <option value="">Select Time Slot</option>
                                <option value="Morning">Morning</option>
                                <option value="Evening">Evening</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="program" class="col-md-3 col-form-label text-md-end">Program:</label>
                        <div class="col-md-7">
                            <select  id="program_id" name="program_id" class="form-group w-100 h-100" required>
                                <option class="form-control" value="">Select Program</option>
                                @foreach($packages as $package)
                                <option class="form-control" value="{{ $package->id }}">{{ $package->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
