<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admission;

class AdmissionController extends Controller
{

    public function index()
    {
        $admissions = Admission::all();
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.admission.index', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function create()
    {

        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.admission.create');
        } else {
            return Redirect::to('/admins')->send();
        }
    }

    public function store(Request $request)
    {
        $admission = new Admission;
        $admission->id = $request->admission;
        $admission->date = $request->date;
        $admission->studentname = $request->studentname;
        $admission->mobile = $request->mobile;
        $admission->class = $request->class;
        $admission->formno = $request->formno;
        $admission->fathername = $request->fathername;
        $admission->jamat = $request->jamat;
        $admission->address = $request->address;
        $admission->district = $request->district;
        $admission->formfee = $request->formfee;
        $admission->admissionfee = $request->admissionfee;
        $admission->idcardfee = $request->idcardfee;
        $admission->resulltcardfee = $request->resulltcardfee;
        $admission->monthlykhoraki = $request->monthlykhoraki;
        $admission->residentialfee = $request->residentialfee;
        $admission->nonresidentialfee = $request->nonresidentialfee;
        $admission->boardregistrationfee = $request->boardregistrationfee;
        $admission->examfee = $request->examfee;
        $admission->sanadfee = $request->sanadfee;
        $admission->protoyonfee = $request->protoyonfee;
        $admission->moallimafee = $request->moallimafee;
        $admission->currentbill = $request->currentbill;
        $admission->boyeka = $request->boyeka;
        $admission->bibidh = $request->bibidh;
        $sum = 0;
        (int)$sum = (int)$sum + (int)$admission->formfee + (int)$admission->admissionfee + (int)$admission->idcardfee + (int)$admission->resulltcardfee + (int)$admission->monthlykhoraki + (int)$admission->residentialfee + (int)$admission->nonresidentialfee + (int)$admission->boardregistrationfee + (int)$admission->examfee + (int)$admission->sanadfee + (int)$admission->protoyonfee + (int)$admission->moallimafee + (int)$admission->currentbill + (int)$admission->boyeka + (int)$admission->bibidh;
        $admission->total = $sum;

        if ($request->hasFile('image')) {
            $admission->image = $request->image->store('admission');
        }
        $admission->save();
        return redirect()->back()->with('message', 'New Student Has Successfully Added');
    }


    public function update(Request $request, Admission $admission)
    {
        $update = $admission->update([
            'studentname' => $request->studentname,
            'mobile' => $request->mobile,
            'class' => $request->class,
            'fathername' => $request->fathername,
            'jamat' => $request->jamat,
            'address' => $request->address,
            'district' => $request->district,
            'formfee' => $request->formfee,
            'admissionfee' => $request->admissionfee,
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
        if ($request->hasFile('image')) {
            $update = $admission->update([
                'image' => $request->file('image')->store('admission')
            ]);
        }
        $sum = 0;
        (int)$sum = (int)$sum + (int)$admission->formfee + (int)$admission->admissionfee + (int)$admission->idcardfee + (int)$admission->resulltcardfee + (int)$admission->monthlykhoraki + (int)$admission->residentialfee + (int)$admission->nonresidentialfee + (int)$admission->boardregistrationfee + (int)$admission->examfee + (int)$admission->sanadfee + (int)$admission->protoyonfee + (int)$admission->moallimafee + (int)$admission->currentbill + (int)$admission->boyeka + (int)$admission->bibidh;
        $update = $admission->update([
            'total' => $sum
        ]);
        if ($update) {
            return redirect('/admissions')->with('message', 'Student Info has been updated successfully');
        }
    }

    public function delete(Admission $admission)
    {
        if ($admission->image) {
            unlink(storage_path('app/public/' . $admission->image));
        }
        $delete = $admission->delete();
        if ($delete) {
            return redirect()->back()->with('message', ' This Student has been removed successfully');
        }
    }


    public function moneyrecipt($id)
    {
        $admission = Admission::where('id', '=', $id)->get();
        return view('admin.admission.moneyrecipt', compact('admission'));
    }
}
