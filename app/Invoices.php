<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    protected $primaryKey = "id";

    protected $table = "invoices";

    protected $fillable = [
        'client_name',
        'address',
        'city',
        'country',
        'zip',
        'total',
        'services'
    ];
}
