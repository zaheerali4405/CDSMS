@extends('layouts.app')

@section('content')
    <div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <a href="{{ route('enquiries.create') }}" class="btn btn-primary py-3 px-5 text-white">Post a New Enquiry</a>
        </div>
    </div>

    <div class="row">
        Your Enquiries:
    </div>
    </div>
@endsection
