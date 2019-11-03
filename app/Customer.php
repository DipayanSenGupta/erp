<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $dates = [
        'created_at',
        'deleted_at',
        'updated_at'
    ];
}
