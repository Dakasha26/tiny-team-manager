<?php

namespace App\Models\WorksTables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Activity extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;
}
