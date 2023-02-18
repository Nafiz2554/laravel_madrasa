<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Deposit;

class DepositController extends Controller
{   
    public function index()
    {
        $deposits = Deposit::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.deposit.index', compact('deposits'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function create()
    {

        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.deposit.create');
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function store(Request $request)
    {
        $deposit = new Deposit;
        $deposit->id = $request->deposit;
        $deposit->date = $request->date;
        $deposit->month = $request->month;
        $deposit->year = $request->year;
        $deposit->name = $request->name;
        $deposit->occupation = $request->occupation;
        $deposit->mobile = $request->mobile; 
        $deposit->address = $request->address;
        $deposit->patano = $request->patano;
        $deposit->khoraki = $request->khoraki;
        $deposit->dan = $request->dan;
        $deposit->vortifee = $request->vortifee;
        $deposit->masikcada = $request->masikcada;
        $deposit->baridokan = $request->baridokan;
        $deposit->examfee = $request->examfee;
        $deposit->generalfee = $request->generalfee;
        $deposit->jakat = $request->jakat;
        $deposit->lillahfee = $request->lillahfee;
         
        $sum = 0;
        (int)$sum = (int)$sum + (int)$deposit->khoraki + (int)$deposit->dan + (int)$deposit->vortifee + (int)$deposit->masikcada + (int)$deposit->baridokan + (int)$deposit->examfee + (int)$deposit->generalfee + (int)$deposit->jakat + (int)$deposit->lillahfee;
        $deposit->total = $sum;
        $deposit->save();
        return redirect()->back()->with('message', 'New Deposit Has Successfully Added');
    }


    public function update(Request $request, Deposit $deposit)
    {
        $update = $deposit->update([
            'date' => $request->date,
            'month' => $request->month,
            'year' => $request->year,
            'name' => $request->name,
            'occupation' => $request->occupation,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'patano' => $request->patano,
            'khoraki' => $request->khoraki,
            'dan' => $request->dan,
            'vortifee' => $request->vortifee,
            'masikcada' => $request->masikcada,
            'baridokan' => $request->baridokan,
            'examfee' => $request->examfee,
            'generalfee' => $request->generalfee,
            'jakat' => $request->jakat, 
            'lillahfee' => $request->lillahfee 
        ]); 
        $sum = 0;
        (int)$sum = (int)$sum + (int)$deposit->khoraki + (int)$deposit->dan + (int)$deposit->vortifee + (int)$deposit->masikcada + (int)$deposit->baridokan + (int)$deposit->examfee + (int)$deposit->generalfee + (int)$deposit->jakat + (int)$deposit->lillahfee;
        $update = $deposit->update([
            'total' => $sum
        ]);
        if ($update) {
            return redirect('/deposits')->with('message', 'Deposit Info has been updated successfully');
        }
    }

    public function delete(Deposit $deposit)
    {
        
        $delete = $deposit->delete();
        if ($delete) {
            return redirect()->back()->with('message', ' This Deposit has been removed successfully');
        }
    }


    public function moneyrecipt($id)
    {
        $deposit = Deposit::where('id', '=', $id)->get();
        return view('admin.deposit.moneyrecipt', compact('deposit'));
    }

}
