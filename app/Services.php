<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $primaryKey = "id";

    protected $table = "services";

    protected $fillable = [
        'name',
        'question',
        'description',
        'cost_ng',
        'cost_usd',
        'cost_rub',
        'duration'
    ];
}
