@extends('layouts.app')

@section('content')

    <h2 class="text-center">Your Application Status is: @if($status == 'active')
        Confirmed
        @elseif($status == 'inactive')
        Pending/Not Confirmed Yet
        @endif
    </h2>
@endsection
