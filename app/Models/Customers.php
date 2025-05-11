<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "customers";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'email', 'password'];

    // mutator are used here to capitilize the first letter of each word
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
}
