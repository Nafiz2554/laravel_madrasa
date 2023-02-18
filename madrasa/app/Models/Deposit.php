<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'date', 'month', 'year', 'name', 'occupation', 'address', 'mobile', 'patano', 'khoraki', 'dan', 'vortifee', 'masikcada', 'baridokan', 'examfee',
        'generalfee', 'jakat', 'lillahfee', 'total', 'status'
    ];
}
