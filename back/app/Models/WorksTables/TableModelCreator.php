<?php

namespace App\Models\WorksTables;


use Illuminate\Database\Eloquent\Model;
use Psy\Exception\ErrorException;

class TableModelCreator
{
    public static function createModel($tableName): Model {
        switch($tableName){
            case('members'):
                return new Member();
            case('events'):
                return new Event();
            case('activities'):
                return new Activity();
            case('positions'):
                return new Position();
            case('documents_packages'):
                return new DocumentsPackage();
            default:
                throw new ErrorException();
        }
    }
}
