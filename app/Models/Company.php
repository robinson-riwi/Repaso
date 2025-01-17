<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'phone',
        'address'
    ];
    protected $hidden = [
        ''
    ];
}
