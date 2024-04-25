<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class MyReportsController extends Controller
{
    //

    public function dashboard(){
        if(Auth::user()->type == 'player'){
            return redirect()->route('select.game');
        }
        $plasadaTotal = \App\Models\Wallet::where('user_id',1)->first()->commission; //plasada
        $totalWallet = \App\Models\Wallet::where('user_id',1)->first()->balance; // system credits

        $operatorCommissions = \DB::table('users as ma')
                                ->join('wallets as w','w.user_id','=','ma.id')
                                ->where('ma.type','operator')->sum('w.commission');

        $subOperatorCommissions = \DB::table('users as ma')
                                ->join('wallets as w','w.user_id','=','ma.id')
                                ->where('ma.type','sub-operator')->sum('w.commission');

        $masterAgentCommissions = \DB::table('users as ma')
                                ->join('wallets as w','w.user_id','=','ma.id')
                                ->where('ma.type','master-agent')->sum('w.commission');

        $agentCommissions = \DB::table('users as a')
                            ->join('wallets as w','w.user_id','=','a.id')
                            ->where('a.type','gold-agent')->sum('w.commission');

        $silverAgentCommissions = \DB::table('users as a')
                            ->join('wallets as w','w.user_id','=','a.id')
                            ->where('a.type','silver-agent')->sum('w.commission');

        $totalWithdrawnCredits = \App\Models\Withdraw::where('type','credits')->where('status','completed')->sum('amount');
        $totalWithdrawnCommissions = \App\Models\Withdraw::where('type','commission')->where('status','completed')->sum('amount');

        $operatorPointsWithdrawals = DB::table('withdraws as w')
                                    ->join('users as u','u.id','=','w.requested_by')
                                    ->select('w.*')
                                    ->where('u.type','operator')
                                    ->where('w.type','credits')
                                    ->sum('w.amount');

        $operatorCommiWithdrawals = DB::table('withdraws as w')
                                    ->join('users as u','u.id','=','w.requested_by')
                                    ->select('w.*')
                                    ->where('u.type','operator')
                                    ->where('w.type','commission')
                                    ->sum('w.amount');

        $admins = User::where('type','admin')->get();
        $topAgents = \DB::table('wallets as w')
            ->join('users as u','u.id','=','w.user_id')
            ->select('u.name','w.commission','u.created_at')
            ->where('u.type','gold-agent')
            ->orderBy('w.commission','DESC')->limit(10)->get();

        $topMasterAgents = \DB::table('wallets as w')
            ->join('users as u','u.id','=','w.user_id')
            ->select('u.name','w.commission','u.created_at')
            ->where('u.type','master-agent')
            ->orderBy('w.commission','DESC')->limit(10)->get();

        // $userCredits = \App\Models\Wallet::where('user_id','!=',1)->sum('balance');
        $userCredits = \DB::table('users as u')
                    ->join('wallets as w','w.user_id','=','u.id')
                    ->where('u.type','!=','admin')
                    ->where('u.type','!=','super-admin')->sum('w.balance');
        return view('admin.myreports.dashboard',compact('plasadaTotal','totalWallet','operatorCommissions','subOperatorCommissions','masterAgentCommissions','agentCommissions','silverAgentCommissions','totalWithdrawnCredits','totalWithdrawnCommissions','userCredits','topMasterAgents','topAgents','admins','operatorPointsWithdrawals','operatorCommiWithdrawals'));
    }
}
