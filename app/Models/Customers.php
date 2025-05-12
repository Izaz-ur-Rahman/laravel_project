<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customers extends Model
{
    use SoftDeletes;
    protected $table = "customers";

    protected $primaryKey = "id";
    protected $fillable = ['name', 'email', 'password'];

    // mutator are used here to capitilize the first letter of each word
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
}
