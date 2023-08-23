@extends('layouts.app')

@section('content')

        @if($status == '1')
        <h2 class="text-center">Your Application Status is: Confirmed</h2>
        @elseif($status == '0')
            <h2 class="text-center">Your Application Status is: Not Confirmed</h2>
        @else
            <h2 class="text-center">You Have Not Enrolled in any Program</h2>
        @endif

@endsection
