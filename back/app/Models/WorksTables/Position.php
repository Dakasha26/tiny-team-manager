<?php

namespace App\Models\WorksTables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory;

    protected  $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
}
