<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admission;
use App\Models\Fee;
use App\Models\Cost;
use App\Models\Deposit;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
    public function dashboard(){
        $total_deposit = Deposit::sum('total');
        $total_cost = Cost::sum('total');
        $total_student=Admission::count(); 
        $fee=Fee::all();
        $this->AdminAuthCheck();
        return view('admin.dashboard',compact('total_student','total_deposit','total_cost','fee'));
    }
    //create admission fee
    public function store(Request $request)
    {   
        DB::table('fees')->truncate(); 
        $fee = new Fee; 
        $fee->id = $request->fee;
        $fee->amount = $request->amount;
          
        $fee->save();
        return redirect()->back()->with('message', 'Admisson Fee Has Successfully Edited');
    }
  

    public function logout(){
        Session()->flush();
        return Redirect::to('/admins');
    }

    public function AdminAuthCheck(){
        $admin_id=Session()->get('admin_id');
        if($admin_id){
            return;
        }
        else{
            return Redirect::to('/admins')->send();
        }
    }
}
