<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInformations extends Model
{
    //

    protected $table='contact_informations';

    protected $fillable =[
        'name',
        'email',
        'gender',
        'nationality',
        'address',
        'qualification',
        'dob',
        'mobile'
    ];
}
