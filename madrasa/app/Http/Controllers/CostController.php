<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cost;

class CostController extends Controller
{
    public function index()
    {
        $costs = Cost::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.cost.index', compact('costs'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function create()
    {

        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.cost.create');
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function store(Request $request)
    {
        $cost = new Cost;
        $cost->id = $request->cost;
        $cost->date = $request->date;
        $cost->month = $request->month;
        $cost->year = $request->year;
        $cost->vawcharno = $request->vawcharno;
        $cost->boarding = $request->boarding;
        $cost->nirman = $request->nirman; 
        $cost->beton = $request->beton;
        $cost->asbab = $request->asbab;
        $cost->jogajog = $request->jogajog;
        $cost->chapa = $request->chapa;
        $cost->currentnet = $request->currentnet;
        $cost->exam = $request->exam;
        $cost->guest = $request->guest;
        $cost->bibidh = $request->bibidh;
        $cost->loan = $request->loan;
        $cost->khorakhi = $request->khorakhi;
        $cost->basicneed = $request->basicneed;
        $cost->lillahkorjo = $request->lillahkorjo;
        $cost->vortiexam = $request->vortiexam;
         
        $sum = 0;
        (int)$sum = (int)$sum + (int)$cost->boarding + (int)$cost->nirman + (int)$cost->beton + (int)$cost->asbab + (int)$cost->jogajog + (int)$cost->chapa + (int)$cost->currentnet + (int)$cost->exam + (int)$cost->guest + (int)$cost->bibidh + (int)$cost->loan + (int)$cost->khorakhi + (int)$cost->basicneed + (int)$cost->lillahkorjo + (int)$cost->vortiexam;
        $cost->total = $sum;
        $cost->save();
        return redirect()->back()->with('message', 'New Cost Has Successfully Added');
    }


    public function update(Request $request, Cost $cost)
    {
        $update = $cost->update([
            'date' => $request->date,
            'month' => $request->month,
            'year' => $request->year,
            'vawcharno' => $request->vawcharno,
            'boarding' => $request->boarding,
            'nirman' => $request->nirman,
            'beton' => $request->beton,
            'asbab' => $request->asbab,
            'jogajog' => $request->jogajog,
            'chapa' => $request->chapa,
            'currentnet' => $request->currentnet,
            'exam' => $request->exam,
            'guest' => $request->guest,
            'bibidh' => $request->bibidh,
            'loan' => $request->loan,
            'khorakhi' => $request->khorakhi, 
            'basicneed' => $request->basicneed, 
            'lillahkorjo' => $request->lillahkorjo, 
            'vortiexam' => $request->vortiexam
        ]); 
        $sum = 0;
        (int)$sum = (int)$sum + (int)$cost->boarding + (int)$cost->nirman + (int)$cost->beton + (int)$cost->asbab + (int)$cost->jogajog + (int)$cost->chapa + (int)$cost->currentnet + (int)$cost->exam + (int)$cost->guest + (int)$cost->bibidh + (int)$cost->loan + (int)$cost->khorakhi + (int)$cost->basicneed + (int)$cost->lillahkorjo + (int)$cost->vortiexam;
        $update = $cost->update([
            'total' => $sum
        ]);
        if ($update) {
            return redirect('/costs')->with('message', 'Cost Info has been updated successfully');
        }
    }

    public function delete(Cost $cost)
    {
        
        $delete = $cost->delete();
        if ($delete) {
            return redirect()->back()->with('message', ' This Cost has been removed successfully');
        }
    }


    public function moneyrecipt($id)
    {
        $cost = Cost::where('id', '=', $id)->get();
        return view('admin.cost.moneyrecipt', compact('cost'));
    }
}
