<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $primaryKey = "id";

    protected $table = "projects";

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'company',
        'description',
        'file',
        'services',
        'budget_from',
        'budget_to'
    ];
}
