<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function PHPUnit\Framework\returnSelf;

class Usermaster extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = '_usermaster';
    protected $primaryKey = 'user_id';

    function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
    // function getDobAttribute($value)
    // {
    //     return date('d-M-Y', strtotime($value));
    // }
}
