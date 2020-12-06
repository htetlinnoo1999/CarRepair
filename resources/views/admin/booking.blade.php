@extends('layouts.master')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        {{$dataTable->table()}}
    </div>
</div>
@endsection

@push('scripts')
@include('admin.layouts.delete')
    {{$dataTable->scripts()}}
@endpush
