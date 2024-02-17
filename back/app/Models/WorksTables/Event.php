<?php

namespace App\Models\WorksTables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $connection = 'mysql';
    public $timestamps = false;

}
