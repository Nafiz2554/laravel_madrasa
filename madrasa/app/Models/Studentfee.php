<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentfee extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'date','month','year', 'studentname', 'formno', 'fathername', 'jamat', 'address', 'district', 'formfee', 'masikbeton', 'idcardfee', 'resulltcardfee', 'monthlykhoraki', 'residentialfee', 'nonresidentialfee', 'boardregistrationfee', 'examfee', 'sanadfee', 'protoyonfee', 'moallimafee', 'currentbill', 'boyeka','mobile','class', 'bibidh','total', 'status'];
}
