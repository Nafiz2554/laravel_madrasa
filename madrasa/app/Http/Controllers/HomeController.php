<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use Illuminate\Support\Facades\Redirect;
use App\Models\Studentfee;

class HomeController extends Controller
{   
    public function profile(){
        $admissions = Admission::all();
        return view('admin.student', compact('admissions'));
    }
    public function viewprofile($name){
        $studentfee = Studentfee::where('studentname', '=', $name)->get();
        
        return view('admin.studentprofile', compact('studentfee'));
    }

    public function classone()
    {
        $admissions = Admission::where('class', '=', 1)->get();
        
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.section.class1', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function classtwo()
    {
        $admissions = Admission::where('class', '=', 2)->get();
        
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.section.class2', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function classthree()
    {
        $admissions = Admission::where('class', '=', 3)->get();
        
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.section.class3', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function classfour()
    {
        $admissions = Admission::where('class', '=', 4)->get();
        
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.section.class4', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function classfive()
    {
        $admissions = Admission::where('class', '=', 5)->get();
        
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.section.class5', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function classsix()
    {
        $admissions = Admission::where('class', '=', 6)->get();
        
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.section.class6', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function classseven()
    {
        $admissions = Admission::where('class', '=', 7)->get();
        
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.section.class7', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function classeight()
    {
        $admissions = Admission::where('class', '=', 8)->get();
        
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.section.class8', compact('admissions'));
        } else {
            return Redirect::to('/admins')->send();
        }
    }
    public function comingsoon()
    {
         
        $admin_id = Session()->get('admin_id');
        if ($admin_id) {
            return view('admin.comingsoon');
        } else {
            return Redirect::to('/admins')->send();
        }
    }
}
