<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $table = 'expenses';

    protected $primaryKey = 'id';

    protected $fillable =[
        'name',
        'category_id',
        'cost',
        'unit',
        'qty'
    ];

    public function category(){
        return $this->belongsTo(ExpensesCategory::class, 'category_id');
    }

}
