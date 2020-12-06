@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-4">
        <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.car.form')
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        </div>
    </div>
</div>

@endsection
