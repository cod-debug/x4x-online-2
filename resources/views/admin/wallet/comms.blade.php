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
        <li class="breadcrumb-item active">Commission History</li>
    </ol>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card card-info" style="margin-left: 2%; margin-right: 2%;">
                <div class="card-header">
                    <h3 class="card-title "><i class="fas fa-align-justify"></i>   <span class="text-white"> Your COMMISSION: </span>   ( 0.00 )</h3>

                </div>
                <div class="card-body " style="padding: 0px;">

                    <form action="/MyReports/CommLogs" method="post">                    
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
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped  ">
                            <thead>
                                <tr>
                                    <th>Arena</th>
                                    <th>Date</th>
                                    <th>Fight#</th>
                                    <th>Username</th>
                                    <th>LoadedBy</th>
                                    <th>Points</th>
                                    <th>Date</th>
                                    <th>From</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($myCommissions as $i => $comm)
                                    @if ($user->type == 'operator')
                                        @if($comm->operator_commission > 0)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{strtoupper($comm->event_name)}}</td>
                                                <td>{{$comm->fight_number}}</td>
                                                <td>{{bcdiv($comm->amount,1,2)}}</td>
                                                <td>{{bcdiv($comm->operator_commission,1,2)}}</td>
                                                <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                            </tr>
                                        @endif
                                    @elseif ($user->type == 'sub-operator')
                                        @if($comm->sub_operator_commission > 0)
                                        <tr>
                                            <td>{{$i+1}}</td>
                                            <td>{{strtoupper($comm->event_name)}}</td>
                                            <td>{{$comm->fight_number}}</td>
                                            <td>{{bcdiv($comm->amount,1,2)}}</td>
                                            <td>{{bcdiv($comm->sub_operator_commission,1,2)}}</td>
                                            <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                        </tr>
                                        @endif
                                    @elseif ($user->type == 'master-agent')
                                        @if($comm->master_agent_commission > 0)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{strtoupper($comm->event_name)}}</td>
                                                <td>{{$comm->fight_number}}</td>
                                                <td>{{bcdiv($comm->amount,1,2)}}</td>
                                                <td>{{bcdiv($comm->master_agent_commission,1,2)}}</td>
                                                <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                            </tr>
                                        @endif
                                    @elseif ($user->type == 'gold-agent')
                                        @if($comm->gold_agent_commission > 0)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{strtoupper($comm->event_name)}}</td>
                                                <td>{{$comm->fight_number}}</td>
                                                <td>{{bcdiv($comm->amount,1,2)}}</td>
                                                <td>{{bcdiv($comm->gold_agent_commission,1,2)}}</td>
                                                <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                            </tr>
                                        @endif
                                    @elseif ($user->type == 'silver-agent')
                                        @if($comm->silver_agent_commission > 0)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{strtoupper($comm->event_name)}}</td>
                                                <td>{{$comm->fight_number}}</td>
                                                <td>{{bcdiv($comm->amount,1,2)}}</td>
                                                <td>{{bcdiv($comm->silver_agent_commission,1,2)}}</td>
                                                <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                            </tr>
                                        @endif
                                    @endif

                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 d-flex justify-content-end">
                            <li class="page-item active">
                                <a href="/MyReports/CommLogs?page=1" class="page-link"> 1 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=2" class="page-link"> 2 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=3" class="page-link"> 3 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=4" class="page-link"> 4 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=5" class="page-link"> 5 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=6" class="page-link"> 6 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=7" class="page-link"> 7 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=8" class="page-link"> 8 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=9" class="page-link"> 9 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=10" class="page-link"> 10 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=11" class="page-link"> 11 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=12" class="page-link"> 12 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=13" class="page-link"> 13 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=14" class="page-link"> 14 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=15" class="page-link"> 15 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=16" class="page-link"> 16 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=17" class="page-link"> 17 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=18" class="page-link"> 18 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=19" class="page-link"> 19 </a>
                            </li>
                            <li class="page-item  ">
                                <a href="/MyReports/CommLogs?page=20" class="page-link"> 20 </a>
                            </li>
                    </ul>


                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header">
                    <strong>COMMISSION LOGS</strong>
                </div>
                <div class="card-body p-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <th>#</th>
                                <th>Event Name</th>
                                <th>Fight Number</th>
                                <th>Bet Amount</th>
                                <th>Earned Commission</th>
                                <th>Date/Time</th>
                            </thead>
                            <tbody>
                                @foreach ($myCommissions as $i => $comm)
                                    @if ($user->type == 'operator')
                                        @if($comm->operator_commission > 0)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{strtoupper($comm->event_name)}}</td>
                                                <td>{{$comm->fight_number}}</td>
                                                <td>{{bcdiv($comm->amount,1,2)}}</td>
                                                <td>{{bcdiv($comm->operator_commission,1,2)}}</td>
                                                <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                            </tr>
                                        @endif
                                    @elseif ($user->type == 'sub-operator')
                                        @if($comm->sub_operator_commission > 0)
                                        <tr>
                                            <td>{{$i+1}}</td>
                                            <td>{{strtoupper($comm->event_name)}}</td>
                                            <td>{{$comm->fight_number}}</td>
                                            <td>{{bcdiv($comm->amount,1,2)}}</td>
                                            <td>{{bcdiv($comm->sub_operator_commission,1,2)}}</td>
                                            <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                        </tr>
                                        @endif
                                    @elseif ($user->type == 'master-agent')
                                        @if($comm->master_agent_commission > 0)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{strtoupper($comm->event_name)}}</td>
                                                <td>{{$comm->fight_number}}</td>
                                                <td>{{bcdiv($comm->amount,1,2)}}</td>
                                                <td>{{bcdiv($comm->master_agent_commission,1,2)}}</td>
                                                <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                            </tr>
                                        @endif
                                    @elseif ($user->type == 'gold-agent')
                                        @if($comm->gold_agent_commission > 0)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{strtoupper($comm->event_name)}}</td>
                                                <td>{{$comm->fight_number}}</td>
                                                <td>{{bcdiv($comm->amount,1,2)}}</td>
                                                <td>{{bcdiv($comm->gold_agent_commission,1,2)}}</td>
                                                <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                            </tr>
                                        @endif
                                    @elseif ($user->type == 'silver-agent')
                                        @if($comm->silver_agent_commission > 0)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{strtoupper($comm->event_name)}}</td>
                                                <td>{{$comm->fight_number}}</td>
                                                <td>{{bcdiv($comm->amount,1,2)}}</td>
                                                <td>{{bcdiv($comm->silver_agent_commission,1,2)}}</td>
                                                <td>{{date('M d,Y h:i A',strtotime($comm->created_at))}}</td>
                                            </tr>
                                        @endif
                                    @endif

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    // $(document).ready(function () {
    //     $('.table').DataTable({
    //         "ordering": false,
    //         "pageLength" : 50
    //     });
    //     $('.select').select2();
    // });
</script>
@endsection
