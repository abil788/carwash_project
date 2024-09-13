// resources/views/bookings/index.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Bookings</h1>
    @foreach($bookings as $booking)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $booking->car_model }}</h5>
            <p class="card-text">{{ $booking->service_type }}</p>
            <p class="card-text">{{ $booking->booking_time }}</p>
            <p class="card-text">{{ $booking->status }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
