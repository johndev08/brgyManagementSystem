<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    //
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'birthDate',
        'gender',
        'age',
        'contactNumber',
        'email',
    ];
}
