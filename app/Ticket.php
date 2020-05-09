<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table='tickets';
    protected $fillable = [
        'callID','description', 'subject', 'userId', 'status', 'priority', 'problemTyp', 'system'
    ];
}
