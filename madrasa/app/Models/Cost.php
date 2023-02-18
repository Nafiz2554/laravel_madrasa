<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'date', 'month', 'year', 'vawcharno', 'boarding', 'nirman', 'beton', 'asbab',
        'jogajog', 'chapa', 'currentnet', 'exam', 'guest', 'bibidh',
        'loan', 'khorakhi', 'basicneed', 'lillahkorjo', 'vortiexam', 'total', 'status'
    ];
}
