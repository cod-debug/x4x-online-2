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
    <div>
        <div class="card card-info" style="margin-left: 2%; margin-right: 2%;">

            <div class="card-body " style="padding: 0px;">

                <table id="example1" class="table table-bordered table-striped  ">
                    <thead>
                        <th>#</th>
                        <th>FROM</th>
                        <th>TO</th>
                        <th>AMOUNT</th>
                        <th>ENDING BALANCE</th>
                        <th>REMARKS</th>
                        <th>NOTES</th>
                        <th>DATE/TIME</th>
                    </thead>
                    <tbody>
                        @foreach ($withdraws as $i => $n)
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
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 ">
                        <li class="page-item active">
                            <a href="/MyReports/AgentWithdrawal?page=1" class="page-link"> 1 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=2" class="page-link"> 2 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=3" class="page-link"> 3 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=4" class="page-link"> 4 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=5" class="page-link"> 5 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=6" class="page-link"> 6 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=7" class="page-link"> 7 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=8" class="page-link"> 8 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=9" class="page-link"> 9 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=10" class="page-link"> 10 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=11" class="page-link"> 11 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=12" class="page-link"> 12 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=13" class="page-link"> 13 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=14" class="page-link"> 14 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=15" class="page-link"> 15 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=16" class="page-link"> 16 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=17" class="page-link"> 17 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=18" class="page-link"> 18 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=19" class="page-link"> 19 </a>
                        </li>
                        <li class="page-item  ">
                            <a href="/MyReports/AgentWithdrawal?page=20" class="page-link"> 20 </a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>WITHDRAWAL LOGS</strong>
            </div>
            <div class="card-body">
                <div class="tab-pane" id="withdraw">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <th>#</th>
                                <th>FROM</th>
                                <th>TO</th>
                                <th>AMOUNT</th>
                                <th>ENDING BALANCE</th>
                                <th>REMARKS</th>
                                <th>NOTES</th>
                                <th>DATE/TIME</th>
                            </thead>
                            <tbody>
                                @foreach ($withdraws as $i => $n)
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
        </div>
    </div>
</div> --}}
@endsection
@section('scripts')
{{-- <script>
    $(document).ready(function () {
        $('.table').DataTable({
            "ordering": false
        });
        $('.select').select2();
    });
</script> --}}
@endsection
