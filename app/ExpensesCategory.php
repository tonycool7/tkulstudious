<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpensesCategory extends Model
{
    protected $table = 'expenses_category';

    protected $primaryKey = 'id';

    protected $fillable =[
        'name',
        'description'
    ];

    public function expenses(){
        return $this->hasMany(Expenses::class, 'category_id', 'id');
    }
}
