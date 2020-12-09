@extends('layouts.user')

@section('content')
<div class="container pt-5">
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Type</th>
            <th scope="col">Image</th>
            <th scope="col">Pick Up time</th>
            <th scope="col">Duration</th>
            <th scope="col">Rental Date</th>
            <th scope="col">Return Date</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{$booking->car->type}}</td>
                <td><img src="{{$booking->car->image}}" width="100" alt="car_img"></td>
                <td>{{$booking->pick_up_time}}</td>
                <td>{{$booking->days}} Days</td>
                <td>{{Carbon\Carbon::parse($booking->start_date)->format('Y-m-d')}}</td>
                <td>{{Carbon\Carbon::parse($booking->end_date)->format('Y-m-d')}}</td>
                <td>{{$booking->price}}</td>
            </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection
