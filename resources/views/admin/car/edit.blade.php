@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-4">
        <form action="{{ route('cars.update', $record->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- {{dd($record)}} --}}
            @include('admin.car.form')
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
</div>

@endsection
