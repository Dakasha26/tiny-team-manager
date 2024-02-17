<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WorksTables\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkReportsController extends Controller
{
    public function getReportBestMembers(){
        return DB::table('activities')
            ->select(DB::raw('row_number() over (order by points desc) as id, sum(pointsNumber) as points, firstName, secondName'/*positions.id as position*/))
            ->join('members', 'members.id', '=', 'activities.member_id')
            //->join('positions', 'positions.id', '=', 'members.position_name')
            ->join('events', 'events.id', '=', 'activities.event_name')
            ->groupBy(['member_id', 'firstName', 'secondName', /*'position'*/])
            ->orderBy('points', 'desc')
            ->get();
    }

    public function getReportGroupActivity(){ // TODO Передача параметров
        return DB::table('activities')
            ->select(DB::raw("row_number() over (order by event_name asc) as id, activities.event_name as event_name, dateTime, location, count(isManager) as membersNumber, count(isManager) as managersNumber"))
            ->whereBetween('dateTime', ['2021-09-01 00:00:00', '2021-12-31 00:00:00'], 'and')
            ->join('events', 'events.id', '=', 'activities.event_name')
            ->join('members', 'members.id', '=', 'activities.member_id')
            ->groupBy(['event_name', 'dateTime', 'location'])
            ->get();
    }
}
