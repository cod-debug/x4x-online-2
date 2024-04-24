@extends('layouts.admin')
@section('styles')
<style>
    .alert-warning,.alert-info{
        font-size: 13px;
    }
    .inner>p{
        font-size: 14px;
    }
    .small-box-footer{
        font-size: 14px;
    }
    .inner>h3{
        font-size: 1.6rem;
    }
    @media only screen and (max-width: 1366px) {
        .inner>p{
            font-size: 12px;
        }
        .inner>h3{
            font-size: 26px !important;
        }
        .small-box-footer{
            font-size: 12px;
        }
    }

    .info-box-text{
        font-size: 22px !important;
        /*font-weight: bold;*/
        /*font-family: "Bodoni Egyptian Pro";*/
        color: white !important;
    }
    .info-box-number{
        font-size: 32px !important;
        /*font-family: "Sancoale Slab Norm" ;*/
        color: white !important;
    }
    .info-box-success{
        background-color: #00bc8c;
        border-radius: 4px;
        opacity: 90%
    }
    .info-box-danger{
        background-color: #e84c3d;
        border-radius: 4px
    }
    .content-wrapper{
       background-color: transparent
    }
    .wrapper{
       background-image: url('/public/images/bg-3-2.jpg');
    }
    
    .arvo-font{
        font-family: 'Arvo', sans-serif !important;
    }
    
    .description-block{
        display: block;
        margin: 10px 0;
    }
    
    .btn-log{
        font-size: 1.25rem !important;
        line-height: 1.5 !important;
    }
</style>
@endsection
@section('content')
<!-- Info boxes -->
<div class="px-2">
    <ol class="breadcrumb mb-0 bg-transparent p-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    @if(in_array(Auth::user()->type, ['operator']))
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
                                <p class="text-center">Wednesday, April 24, 2024</p>
                                
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
    @else:

        @if(Auth::user()->type != 'super-admin')
            <div class="row">
                <div class="col-md-12">
                    <div class="card alert alert-dark"  role="alert">
                        <div class="card-body" style="background-color: #FFF3CD; font-family: 'Arvo', sans-serif;">
                            <div class="text-uppercase" role="alert">
                                <div style="font-size: 14px; color: black !important">
                                    Please take notes of your refferal link below, All players that will register under this link will atomatically be under your account.
                                </div>
                                <div class="form-group text-center">
                                    <input type="text" style="background-color: #FFF3CD;" id="link-input" class="text-center border-0 text-danger form-control" value="{{ route('register', Auth::user()->referral_code) }}">
                                </div>
                                
                                <h2 class="form-group text-center"><b style=" color: #000;text-transform:uppercase;">TOTAL POINTS : {{number_format((Auth::user()->wallet->balance),2,".",",")}}</b></h2>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="arvo-font">
                            <div class="text-center">
                                <button @onclick="copyToClipBoard('link-input')" style="font-size: 1.25rem !important; line-height: 1.5 !important;" class="btn btn-lg text-white btn-danger text-bold">COPY YOUR LINK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(Auth::user()->type == 'super-admin')
        <!--<span>Home/<span>Dashboard</span></span>-->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3 bg-warning">
                        <!--<span class="info-box-icon bg-primary elevation-1">-->
                        <!--    <i class="fas fa-dollar-sign"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">PLASADA INCOME</span>
                        <span class="info-box-number">₱ {{number_format(($plasadaTotal),2,".",",")}}</span>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box-success">
                        <div class="info-box mb-3 bg-transparent">
                        <!--<span class="info-box-icon bg-warning elevation-1">-->
                        <!--    <i class="fas fa-cash-register"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">INCORPORATOR COMM:</span>
                        <span class="info-box-number">₱ {{number_format(($operatorCommissions),2,".",",")}}</span>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box-success">
                        <div class="info-box mb-3 bg-transparent">
                        <!--<span class="info-box-icon bg-primary elevation-1">-->
                        <!--    <i class="fas fa-dollar-sign"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">SUB OPERATOR COMM:</span>
                        <span class="info-box-number">₱ {{number_format(($subOperatorCommissions),2,".",",")}}</span>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class='info-box-success'>
                        <div class="info-box mb-3 bg-transparent">
                        <!--<span class="info-box-icon bg-success elevation-1">-->
                        <!--    <i class="fas fa-hand-holding-usd"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">AGENT COMM:</span>
                        <span class="info-box-number">₱ {{number_format(($masterAgentCommissions),2,".",",")}}</span>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class='info-box-success'>
                        <div class="info-box mb-3 bg-transparent">
                        <!--<span class="info-box-icon bg-secondary elevation-1">-->
                        <!--    <i class="fas fa-hand-holding-usd"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">SUB AGENT COM:</span>
                        <span class="info-box-number">₱ {{number_format(($agentCommissions),2,".",",")}}</span>
                        </div>
                        </div>
                    </div>
                </div>

            

                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box-success">
                        <div class="info-box mb-3 bg-transparent">
                        <!--<span class="info-box-icon bg-success elevation-1">-->
                        <!--    <i class="far fa-credit-card"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">ALL DOWNLINES LOAD</span>
                        <span class="info-box-number">₱ {{number_format(($userCredits),2,".",",")}}</span>
                        </div>
                    </div>
                    </div>
                    
                </div>
                @php
                $adminCredits = [];
                @endphp
                @foreach($admins as $ad)
                    @php
                        $adminCredits[] = $ad->wallet->balance;
                    @endphp
                @endforeach
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box-success">
                        <div class="info-box mb-3 bg-transparent">
                        <!--<span class="info-box-icon bg-success elevation-1">-->
                        <!--    <i class="far fa-credit-card"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">HEAD INCO LOADS</span>
                        <span class="info-box-number">₱ {{bcdiv(array_sum($adminCredits),1,2)}}</span>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box-danger">
                        <div class="info-box mb-3 bg-transparent">
                        <!--<span class="info-box-icon bg-danger elevation-1">-->
                        <!--    <i class="fas fa-wallet"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">INCO WITHDRAWAL</span>
                        <span class="info-box-number">₱ {{number_format(($operatorPointsWithdrawals),2,".",",")}}</span>
                        </div>
                    </div>
                    </div>
                    
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box-danger">
                        <div class="info-box mb-3 bg-transparent">
                        <!--<span class="info-box-icon bg-danger elevation-1">-->
                        <!--    <i class="fas fa-wallet"></i>-->
                        <!--</span>-->
                        <div class="info-box-content">
                        <span class="info-box-text">INCO COMM. WITHDRAWAL</span>
                        <span class="info-box-number">₱ {{number_format(($operatorCommiWithdrawals),2,".",",")}}</span>
                        </div>
                    </div>
                    </div>
                    
                </div>

            </div>
            </div>
        @endif

        @if(agentOnly(Auth::user()->type))
            <div class="row arvo-font">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="card bg-info text-white" style=" color: white;">
                        <div class="card-body">
                            <h5 class="card-title"><b>TOTAL WALLET:</b></h5>
                            <br>
                            <br>
                            <h2>Your Points: {{number_format((Auth::user()->wallet->commission),2,".",",")}} </h2>
                        </div>
                    </div>
                    
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="card bg-success text-white" style="color: white;">
                        <div class="card-body">
                            <h5 class="card-title"><b>TOTAL COMMISSION: <strong class="text-danger text-lg">(1.50%)</strong></b></h5>
                            <br>
                            <br>
                            <h2>Your Commission:</h2>
                            <h2 class="text-white text-bold">{{Auth::user()->commission}}</h2>
                        </div>
                    </div>
                </div>

                @if(!in_array(Auth::user()->type, ['gold-agent', 'sub-operator', 'master-agent']))
                    <div class="col-md-4 mt-1">
                        <div class="description-block">
                        <span class="description-percentage text-primary"> 
                            <a href="{{ route('summary') }}" class="btn btn-danger btn-block btn-lg btn-log">SUMMARY</a></span>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div class="description-block ">
                            <span class="description-percentage text-primary"> <a href="{{ route('load.logs') }}" class="btn btn-warning btn-block btn-lg btn-log"> WALLET</a></span>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <div class="description-block">
                            <span class="description-percentage text-danger"> <a href="{{ route('user.accounts') }}" class="btn btn-primary btn-block btn-lg btn-log">DOWNLINES</a></span>
                        </div>
                    </div>
                    <div class="col-md-6 mt-1">
                        <div class="description-block">
                            <span class="description-percentage text-danger"> <a href="/Points/CTW" class="btn btn-success btn-block btn-lg btn-log">CTW</a></span>
                        </div>
                    </div>
                    <div class="col-md-6 mt-1">
                        <div class="description-block">
                            <span class="description-percentage text-danger"> <a href="{{ route('withdraw.logs') }}" class="btn btn-secondary btn-block btn-lg btn-log">COMM OUT</a></span>
                        </div>
                    </div>
                @endif
            </div>
        @endif
    @endif
</div>
@endsection
@section('scripts')
<script>
    var playerCreds = "{{$userCredits}}";
    function copyToClipBoard(id) {
    /* Get the text field */
        var copyText = document.getElementById(id);
        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Alert the copied text */
        //alert("Referral link copied!");
    }
</script>
@endsection
