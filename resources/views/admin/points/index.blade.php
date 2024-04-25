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
        </ol>

        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="  col-lg-8">
                        <div class="card bg-darker">
                            <div class="card-body">
                                <div class="card-body">
                                    <h2 class="card-text text-center text-warning text-bold">
                                        YOUR POINTS:  
                                        0.00
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="small-box bg-darker  text-white ">
                            <div class="inner">
                                <div class="divheight">
                                    <h5 class="text-center text-uppercase"> 6 COCK/BULSSTAG UBUSAN NG BALA BIG EVENT DERBY </h5>
                                </div>
                                <p class="text-center py-3 mb-0"><?php echo date('l, F j, Y') ?></p>
                            </div>

                            <a href="#" class="small-box-footer btn btn-warning bg-warning">
                                <h5 class="text-bold"><i class="fas fa-play "></i> ENTER TO PLAY</h5>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
@section('scripts')
@endsection