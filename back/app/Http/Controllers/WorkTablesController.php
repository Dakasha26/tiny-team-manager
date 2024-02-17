<?php

namespace App\Http\Controllers;

use App\Models\WorksTables\Event;
use App\Models\WorksTables\Member;
use App\Models\WorksTables\TableModelCreator;
use App\Models\WorksTables\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;
use Psy\Exception\ErrorException;

class WorkTablesController extends Controller
{
    // TODO: зарефакторить
    public function getTable($tableName){
        switch($tableName) {
            case('members'):
                return DB::table('members')
                    ->select(DB::raw('members.id as id, firstName, secondName, patronymicName, members.documents_package_id as documentsPackageId, hasReestr, hasApplication, hasAgreement, hasPassportScan, hasSnilsScan, hasPolisScan, hasInnScan, hasPripisnoeScan, hasEducationReference, hasPhoto, hasFee, hasResult, comment'))
                    ->join('documents_packages', 'documents_packages.id','=','members.documents_package_id')
                    ->get();
            case('events'):
                return Event::all();
            case('activities'):
                return DB::table('activities')
                    ->select(DB::raw('activities.id as id, activities.member_id as memberId, members.firstName as firstName, members.secondName as secondName, events.id as event, isManager, location, dateTime'))
                    ->join('members', 'members.id','=','activities.member_id')
                    ->join('events', 'events.id', '=', 'activities.event_name')
                    ->get();
            case('positions'):
                return Position::all();
            default:
                new ErrorException();
        }
    }

    public function addRecordInTable(Request $request){
        if($request->tableName == 'members'){
            $value = $request->record;
            $membersModel = TableModelCreator::createModel('members');
            $documentsPackageModel = TableModelCreator::createModel('documents_packages');
            $membersModel->secondName = $value['secondName'];
            $membersModel->firstName = $value['firstName'];
            $membersModel->patronymicName = $value['patronymicName'];

            $documentsPackageModel->hasReestr = $value['hasReestr'];
            $documentsPackageModel->hasApplication = $value['hasApplication'];
            $documentsPackageModel->hasAgreement = $value['hasAgreement'];
            $documentsPackageModel->hasPassportScan = $value['hasPassportScan'];
            $documentsPackageModel->hasSnilsScan = $value['hasSnilsScan'];
            $documentsPackageModel->hasPolisScan = $value['hasPolisScan'];
            $documentsPackageModel->hasInnScan = $value['hasInnScan'];
            $documentsPackageModel->hasPripisnoeScan = $value['hasPripisnoeScan'];
            $documentsPackageModel->hasEducationReference = $value['hasEducationReference'];
            $documentsPackageModel->hasPhoto = $value['hasPhoto'];
            $documentsPackageModel->hasFee = $value['hasFee'];
            $documentsPackageModel->hasResult = $value['hasResult'];
            $documentsPackageModel->comment = $value['comment'];
            $documentsPackageModel->save();

            $membersModel->documents_package_id = $documentsPackageModel->id;
            $membersModel->save();
        } else {
            $model = TableModelCreator::createModel($request->tableName);
            foreach($request->record as $key => $value){
                if($key == '__KEY__')
                    continue;
                else if($key == 'memberId'){
                    $newKey = 'member_id';
                    $model->$newKey = $value;
                }
                else if($key == 'event'){
                    $newKey = 'event_name';
                    $model->$newKey = $value;
                }
                else
                    $model->$key = $value;
            }
            $model->save();
        }
    }

    // TODO: лютый говнокод
    public function editRecordInTable(Request $request){
        if($request->tableName == 'positions') {
            DB::table($request->tableName)
                ->where('id', '=', $request->recordId)
                ->delete();
            $model = TableModelCreator::createModel($request->tableName);
            $model->id = $request->newData['id'];
            $model->save();
        } else if($request->tableName == 'members'){
            $key = array_keys($request->newData)[0];
            if($key == 'secondName' || $key == 'firstName' || $key == 'patronymicName')
            DB::table('members')
                ->where('id', $request->recordId)
                ->update([$key=> $request->newData[$key]]);
            else
                DB::table('documents_packages')
                    ->where('id', $request->additional)
                    ->update([$key=> $request->newData[$key]]);
        } else if($request->tableName == 'activities'){
            $key = array_keys($request->newData)[0];
            switch($key){
                case('memberId'):
                    $newKey = 'member_id';
                    break;
                case('event'):
                    $newKey = 'event_name';
                    break;
                default:
                    $newKey = $key;
            }
            DB::table('activities')
                ->where('id', $request->recordId)
                ->update([$newKey => $request->newData[$key]]);
        }else if($request->tableName == 'events') {
            $oldRecord = DB::table($request->tableName)
                ->select('*')
                ->where('id', '=', $request->recordId)
                ->get();
            DB::table($request->tableName)
                ->where('id', '=', $request->recordId)
                ->delete();
            $model = TableModelCreator::createModel($request->tableName);
            $newKey = array_keys($request->newData)[0];
            foreach($oldRecord as $key => $value) {
                if($newKey == 'id')
                    $model->id = $request->newData['id'];
                else
                    $model->$key = $value;
            }
            $model->save();
            if($newKey != 'id')
            DB::table('events')
                ->where('id', $request->recordId)
                ->update([$newKey => $request->newData[$newKey]]);
        }
    }

    // TODO: пролаг при множественном удалении
    public function delRecordInTable(Request $request){
        $tableName = $request->tableName;
        $id = $request->recordId['id'];

        DB::table($tableName)->where('id', '=', $id)->delete();
    }
}
