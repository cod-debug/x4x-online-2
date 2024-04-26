@extends('layouts.admin')
@section('styles')
<style>
    .alert-text{
        font-size: 13px;
        font-style: italic;
    }
</style>
@endsection
@section('content')
    <div class="p-2">
        <ol class="breadcrumb mb-0 bg-transparent p-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-light">Archive</li>
        </ol>
        <div class="mt-2">
            <div class="card bg-dark">
                <div class="card-header">
                    <h3>{{ date('m/d/Y h:i:s A') }}</h3>
                </div>
            </div>
            <div class="card bg-dark">
                <div class="card-header ">
                    <h3 class="card-title"> CLICK DATES </h3>
                    <div class="card-tools">
                        <a href="#" target="_blank">20231210</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection