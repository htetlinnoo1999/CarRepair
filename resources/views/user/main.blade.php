@extends('layouts.user')

@section('content')
<div class="container pt-5">
    @foreach ($cars as $car)
    <div class="card flex-row flex-wrap car__listing mb-4">
        <div class="img__container">
            <img class="img-fluid img__item" src={{$car->image}} alt="">
        </div>
        <div class="card-block px-2 pt-2">
            <h4 class="card-title">{{$car->type}}</h4>
            <p class="card-text">{{$car->car_no}} | {{$car->car_company}}</p>
            <p class="card-text">{{$car->price}}MMK Per Day</p>
            <button type="button" onclick="addCarId({{$car->id}})" class="btn select__button" data-toggle="modal" data-target="#exampleModalCenter">
                Select
            </button>
        </div>
        <div class="w-100"></div>
    </div>
    @endforeach
    <br>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Booking Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('bookNow') }}" method="post" id="booking-form">
                @csrf
                <div class="row">
                    <div class="car_id"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_date">Rental Date</label>
                            <input type="date" class="form-control" name="start_date" id="start_date" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="end_date">Return Date</label>
                            <input type="date" class="form-control" name="end_date" id="end_date" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <select name="days" class="form-control" id="no_of_days">
                        <option value="1">1 Day</option>
                        <option value="2">2 Days</option>
                        <option value="3">3 Days</option>
                        <option value="7">1 Week</option>
                        <option value="14">2 Weeks</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pickUpTime">Car Pick Up Time</label>
                    <input type="text" class="form-control" id="pickUpTime" name="pick_up_time">
                </div>
            </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn book-now-btn" onclick="submit()">Book now</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#pickUpTime').mdtimepicker({theme: "#899832"})
        })
        function addCarId(id)
        {
            $('.car_id').empty();
            $('<input>', {
                type: 'hidden',
                id: 'car_id',
                name: 'car_id',
                value: id
            }).appendTo('.car_id');
        }

        function submit() {
            let user = {!! json_encode(Auth::user()) !!}
            let start_date = $('#start_date').val()
            let end_date = $('#end_date').val()
            let time = $('#pickUpTime').val()
            if (user === null) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Sorry...',
                    text: 'Please login to make rental!',
                }).then(res => {
                    window.location.href = '/login'
                })
                return false;
            }
            if(!start_date || !end_date){
                Swal.fire({
                    icon: 'error',
                    title: 'Sorry...',
                    text: 'Both Rental and Return Date are required!',
                })
                return false;
            }

            if (!time) {
                Swal.fire({
                    icon: 'error',
                    title: 'Sorry...',
                    text: 'Car Pick up time is required!',
                })
                return false;
            }
            $('#booking-form').submit()
        }
    </script>
@endpush
