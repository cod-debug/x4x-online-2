@extends('layouts.admin')
@section('styles')
<style>
    .table thead tr th {
        text-transform: uppercase;
    }
    .content-wrapper {
        background-color: #111!important;
    }
    .card {
        background-color: #343a40;
        color: #fff;
    }
    .card .card-footer {
        background-color: rgba(0,0,0,.1);
    }
    .table.table-head-fixed thead tr:nth-child(1) th {
        background-color: #25252b;
        color: #fff;
        border-bottom: 2px solid #19191d;
        box-shadow: inset 0 1px 0 #25252b, inset 0 0 0 #19191d;
    }
</style>
@endsection
@section('content')
    <div class="p-2">
        <div class="d-flex justify-content-between">
            <h2 class="text-white">RAFFLE ENTRY</h2>
            <ol class="breadcrumb mb-0 bg-transparent p-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active text-light">RAFFLE ENTRY</li>
            </ol>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
    
                    <!-- /.col -->
                    <div class="col-md-12">
    
    
    
                        <!-- /.card -->
    
                        <div class="card-primary">
                            <div class="card-header">
                                <!--<h1 class="card-title label label-warning">
                <i class="far fa-users"></i>-->
                                
                                <!--</h1>-->
    
                                <div class="card-tools">
    
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <div class="card-body">
    
    
                                    <table class="table table-striped table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Access</th>
                                                <th>Points</th>
                                                <th>Entry</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody><tbody>
    
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
    
                            <div class="card-footer clearfix">
    
    
    
    
                            </div>
                        </div>
    
    
                        <div class="card">
                            <div class="card-header">
                                <!--<h1 class="card-title label label-warning">
                <i class="far fa-users"></i>-->
                                
                                <!--</h1>-->
    
                                <div class="card-tools">
    
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <div class="card-body">
                                    <table class="table table-striped table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Event Date</th>
                                                <th>Username</th>
                                                <th>Points</th>
                                                <th>Date Loaded</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody><tbody>
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
    
                            <div class="card-footer clearfix">
    
    
    
    
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
    
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
@section('scripts')
@endsection