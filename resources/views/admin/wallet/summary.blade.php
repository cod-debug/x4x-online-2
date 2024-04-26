@extends('layouts.admin')
@section('styles')
<style>
    .card-body{
        padding: 5px !important;
    }
</style>
@endsection
@section('content')
<div class="p-2">
    <ol class="breadcrumb mb-0 bg-transparent p-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Summary Reports</li>
    </ol>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="table-responsive">
                <div class="card card-info" style="margin-left: 2%; margin-right: 2%;">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-align-justify"></i> Reports</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-striped table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Event</th>
                                    <th>Total Commision</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($summary as $s)
                                    <tr>
                                        <td>{{$s['event_date']}}</td>
                                        <td>{{$s['event_name']}}</td>
                                        <td>{{bcdiv($s['total'],1,2)}}</td>
                                    </tr>
                                @endforeach
    
    
                            </tbody>
            
                        </table>
                    </div>
            
                    {{-- <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item active">
                                    <a class="page-link" href="/MyReports/Summary?page=1"> 1 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=2"> 2 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=3"> 3 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=4"> 4 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=5"> 5 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=6"> 6 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=7"> 7 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=8"> 8 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=9"> 9 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=10"> 10 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=11"> 11 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=12"> 12 </a>
                                </li>
                                <li class="page-item  ">
                                    <a class="page-link" href="/MyReports/Summary?page=13"> 13 </a>
                                </li>
                        </ul>
            
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        $('.table').DataTable({
            "ordering": false
        });
        $('.select').select2();
    });
</script>
@endsection
