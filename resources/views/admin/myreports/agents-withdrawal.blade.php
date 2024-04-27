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
    <div class="mt-2">
        <div class="card card-info table-responsive" style="margin-left: 2%; margin-right: 2%;">

            <div class="card-body " style="padding: 0px;">

                <table id="example1" class="table table-bordered table-striped  ">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Processed By</th>
                            <th>Points</th>
                            <th>Date Withdraw</th>
                            <th>From</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
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
