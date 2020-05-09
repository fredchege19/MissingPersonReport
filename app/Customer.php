<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='OCRD';

    protected $fillable = [
        'CardCode', 'CardType', 'Cellular', 'E_mail', 'AliasName', 'CardName'
    ];
}
