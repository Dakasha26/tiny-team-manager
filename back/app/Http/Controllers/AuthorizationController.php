<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


// Authorization, restore password, registration
class AuthorizationController extends Controller
{
    public function registration(){
        return 0;
    }

    public function authorization(Request $request){
        $login = $request->login;
        $password = $request->password;
        $data = DB::table('users')
            ->select(DB::raw('firstName, lastName'))
            ->where('login', '=', $login)
            ->where('password', '=', $password)
            ->get();
        if($data != null)
            return $data;
        else
            return 1;
    }
}
