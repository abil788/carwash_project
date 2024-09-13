// resources/views/bookings/create.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Book a Car Wash</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="car_model" class="form-label">Car Model</label>
            <input type="text" name="car_model" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="service_type" class="form-label">Service Type</label>
            <input type="text" name="service_type" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="booking_time" class="form-label">Booking Time</label>
            <input type="datetime-local" name="booking_time" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>
@endsection
