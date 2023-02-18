<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Studentfee;

class StudentfeeController extends Controller
{
    public function index()
    {
        $studentfees = Studentfee::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.studentfee.index', compact('studentfees'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function create()
    {

        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.studentfee.create');
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function store(Request $request)
    {
        $studentfee = new Studentfee;
        $studentfee->id = $request->studentfee;
        $studentfee->date = $request->date;
        $studentfee->month = $request->month;
        $studentfee->year = $request->year;
        $studentfee->studentname = $request->studentname;
        $studentfee->mobile = $request->mobile;
        $studentfee->class = $request->class;
        $studentfee->formno = $request->formno;
        $studentfee->fathername = $request->fathername;
        $studentfee->jamat = $request->jamat;
        $studentfee->address = $request->address;
        $studentfee->district = $request->district;
        $studentfee->formfee = $request->formfee;
        $studentfee->masikbeton = $request->masikbeton;
        $studentfee->idcardfee = $request->idcardfee;
        $studentfee->resulltcardfee = $request->resulltcardfee;
        $studentfee->monthlykhoraki = $request->monthlykhoraki;
        $studentfee->residentialfee = $request->residentialfee;
        $studentfee->nonresidentialfee = $request->nonresidentialfee;
        $studentfee->boardregistrationfee = $request->boardregistrationfee;
        $studentfee->examfee = $request->examfee;
        $studentfee->sanadfee = $request->sanadfee;
        $studentfee->protoyonfee = $request->protoyonfee;
        $studentfee->moallimafee = $request->moallimafee;
        $studentfee->currentbill = $request->currentbill;
        $studentfee->boyeka = $request->boyeka;
        $studentfee->bibidh = $request->bibidh;
        $sum = 0;
        (int)$sum = (int)$sum + (int)$studentfee->formfee + (int)$studentfee->masikbeton + (int)$studentfee->idcardfee + (int)$studentfee->resulltcardfee + (int)$studentfee->monthlykhoraki + (int)$studentfee->residentialfee + (int)$studentfee->nonresidentialfee + (int)$studentfee->boardregistrationfee + (int)$studentfee->examfee + (int)$studentfee->sanadfee + (int)$studentfee->protoyonfee + (int)$studentfee->moallimafee + (int)$studentfee->currentbill + (int)$studentfee->boyeka + (int)$studentfee->bibidh;
        $studentfee->total = $sum;

        
        $studentfee->save();
        return redirect()->back()->with('message', 'Students Monthly Deposit Has Successfully Added');
    }


    public function update(Request $request, Studentfee $studentfee)
    {
        $update = $studentfee->update([
            'studentname' => $request->studentname,
            'month' => $request->month,
            'year' => $request->year,
            'mobile' => $request->mobile,
            'class' => $request->class,
            'fathername' => $request->fathername,
            'jamat' => $request->jamat,
            'address' => $request->address,
            'district' => $request->district,
            'formfee' => $request->formfee,
            'masikbeton' => $request->masikbeton,
            'idcardfee' => $request->idcardfee,
            'resulltcardfee' => $request->resulltcardfee,
            'monthlykhoraki' => $request->monthlykhoraki,
            'residentialfee' => $request->residentialfee,
            'nonresidentialfee' => $request->nonresidentialfee,
            'boardregistrationfee' => $request->boardregistrationfee,
            'examfee' => $request->examfee,
            'sanadfee' => $request->sanadfee,
            'protoyonfee' => $request->protoyonfee,
            'moallimafee' => $request->moallimafee,
            'currentbill' => $request->currentbill,
            'boyeka' => $request->boyeka,
            'bibidh' => $request->bibidh
        ]);
        
        $sum = 0;
        (int)$sum = (int)$sum + (int)$studentfee->formfee + (int)$studentfee->masikbeton + (int)$studentfee->idcardfee + (int)$studentfee->resulltcardfee + (int)$studentfee->monthlykhoraki + (int)$studentfee->residentialfee + (int)$studentfee->nonresidentialfee + (int)$studentfee->boardregistrationfee + (int)$studentfee->examfee + (int)$studentfee->sanadfee + (int)$studentfee->protoyonfee + (int)$studentfee->moallimafee + (int)$studentfee->currentbill + (int)$studentfee->boyeka + (int)$studentfee->bibidh;
        $update = $studentfee->update([
            'total' => $sum
        ]);
        if ($update) {
            return redirect('/studentfees')->with('message', 'Students monthly deposit has been updated successfully');
        }
    }

    public function delete(Studentfee $studentfee)
    {
        
        $delete = $studentfee->delete();
        if ($delete) {
            return redirect()->back()->with('message', ' This student monthly deposit has been removed successfully');
        }
    }


    public function moneyrecipt($id)
    {
        $studentfee = Studentfee::where('id', '=', $id)->get();
        return view('admin.studentfee.moneyrecipt', compact('studentfee'));
    }
}
