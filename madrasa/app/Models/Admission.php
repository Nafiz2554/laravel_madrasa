<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    

protected $fillable = ['id', 'date', 'studentname', 'formno', 'fathername', 'jamat', 'address', 'district', 'formfee', 'admissionfee', 'idcardfee', 'resulltcardfee', 'monthlykhoraki', 'residentialfee', 'nonresidentialfee', 'boardregistrationfee', 'examfee', 'sanadfee', 'protoyonfee', 'moallimafee', 'currentbill', 'boyeka','mobile','class', 'bibidh','total', 'image', 'status'];
}
