<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //

    protected $fillable =[

        'id',
        'name',
        'address',
        'file',
        'price',
        'type'

    ];

    protected $hidden =[

        'created_at',
        'updated_at'

    ]
    ;

}
