@extends('layouts.app')

@section('content')

    <div class="container  mt-5">
        <h2 class="text-center">Application Details</h2>
            @if($status == '1')
            <div class="row">
                <div class="col-2"></div>
                <div class="col-2">
                    <h4>Student Name: </h4>
                    <h4>Package Name: </h4>
                    <h4>Time Slot: </h4>
                    <h4>Status: </h4>
                </div>
                <div class="col-8">
                    <h4>{{ auth::user()->name }}</h4>
                    <h4>{{ $application->getProgram->name }}</h4>
                    <h4>{{ $application->time_slot }}</h4>
                    <h4>{{ $application->status }}</h4>
                </div>
            </div>
            @endif

            @if($status == '0')
                <h3 class="text-center">You Are Not Currently Enrolled In Any Program</h3>
            @endif

    </div>

@endsection
