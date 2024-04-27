@extends('layouts.admin')
@section('styles')
<style>
    .alert-text{
        font-size: 13px;
        font-style: italic;
    }
    .content-wrapper {
        background-color: transparent!important;
    }
</style>
@endsection
@section('content')
    <div class="p-2">
        <div class="d-flex justify-content-between">
            <h2 class="text-white">LOAD LOGS</h2>
            <ol class="breadcrumb mb-0 bg-transparent p-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active text-light">Dashboard</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-warning text-white">
                    <div class="card-header text-white">
                        <span>CURRENT POINTS: 0.00</span>
                    </div>
                    <div class="card-body p-0 table-responsive bg-dark" style="overflow-y: scroll; overflow-x: auto">
                        <table class="table ">
                            <thead class="text-uppercase">
                                <tr>

                                    <th class="text-center">Local Date</th>
                                    <th>TO</th>
                                    <th>Points</th>
                                    <th>Notes</th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        // $('.table').DataTable();

        // $('.deduction-values').on('keyup',function(){
        //     var sum = 0;
        //     $('.deduction-values').each(function(){
        //         sum += parseFloat(this.value);
        //     });

        //     $('#player_deduction').val(sum);
        // })
    });
</script>
@endsection
