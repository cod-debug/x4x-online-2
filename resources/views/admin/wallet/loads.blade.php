@extends('layouts.admin')
@section('styles')
<style>
    .select2-container{
        display: block !important;
    }
    .select2-selection{
        height: 38px !important;
    }

    .in{
        color: green;
        font-weight: 700;
        text-transform: uppercase;
    }
    .out{
        color: red;
        font-weight: 700;
        text-transform: uppercase;
    }

    .card-body{
        padding: 5px !important;
    }
</style>
@endsection
@section('content')

<div class="p-2">
    <ol class="breadcrumb mb-0 bg-transparent p-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Load Logs</li>
    </ol>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card card-info" style="margin-left: 2%; margin-right: 2%;">
                <div class="card-header">
                    <h3 class="card-title "><i class="fas fa-align-justify "></i>   <span class="text-white"> Current Points: </span>   ( 0.00 )</h3>
                </div>
                <div class="card-body " style="padding: 0px;">
                    <form action="/MyReports/LoadLogs" method="post">                    
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">

                                    <label>Username:</label>
                                    <div class="input-group ">
                                        <input type="text" name="SearchString" class="form-control" placeholder="SEARCH USERNAME">
                                        <span class="input-group-append">
                                            <input type="submit" value="SEARCH" class="btn btn-primary ">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>                
                    <table id="example1" class="table table-bordered table-striped  ">
                        <thead>
                            <tr>
                                <th>Date Loaded</th>
                                <th>Loaded By</th>
                                <th>Load Type</th>
                                <th>Load From</th>
                                <th>Load To</th>
                                <th>Notes</th>
                                <th>Points</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>

                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <ul class="pagination pagination-sm m-0">
                            <li class="page-item active">
                                <a href="/MyReports/LoadLogs?page=1" class="page-link"> 1 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=2" class="page-link"> 2 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=3" class="page-link"> 3 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=4" class="page-link"> 4 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=5" class="page-link"> 5 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=6" class="page-link"> 6 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=7" class="page-link"> 7 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=8" class="page-link"> 8 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=9" class="page-link"> 9 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=10" class="page-link"> 10 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=11" class="page-link"> 11 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=12" class="page-link"> 12 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=13" class="page-link"> 13 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=14" class="page-link"> 14 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=15" class="page-link"> 15 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=16" class="page-link"> 16 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=17" class="page-link"> 17 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=18" class="page-link"> 18 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=19" class="page-link"> 19 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/LoadLogs?page=20" class="page-link"> 20 </a>
                            </li>
                    </ul>


                </div>

            </div>
        </div>
        {{-- <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>LOAD LOGS</strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <th>#</th>
                                <th>TO</th>
                                <th>FROM</th>
                                <th>AMOUNT</th>
                                <th>ENDING BALANCE</th>
                                <th>REMARKS</th>
                                <th>NOTES</th>
                                <th>DATE/TIME</th>
                            </thead>
                            <tbody>
                                @foreach ($loads as $i => $n)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{($n->user_to)}}</td>
                                        <td>{{($n->user_from)}}</td>
                                        <td>{{bcdiv($n->amount,1,2)}}</td>
                                        <td>{{bcdiv($n->ending_balance,1,2)}}</td>
                                        <td>{{($n->remarks)}}</td>
                                        <td>{{($n->user_notes)}}</td>
                                        <td>{{date('m/d/Y h:i:s A',strtotime($n->created_at))}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
@section('scripts')
<script>
    // $(document).ready(function () {
    //     $('.table').DataTable({
    //         "ordering": false
    //     });
    //     $('.select').select2();
    // });
</script>
@endsection
